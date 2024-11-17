<?php 

class productModel {
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tiendaderopa;charset=utf8', 'root', '');
    }

    function getAll(){
        $query = $this->db->prepare('SELECT * FROM producto');
        $query->execute();
        $productos = $query->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }

    function sortByOrder($sortby = null, $order = null){
        $query = $this->db->prepare("SELECT * FROM producto ORDER BY $sortby $order");
        $query->execute();
        $productos = $query->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }

    function productoById($id_producto){
        $query = $this->db->prepare('SELECT * FROM producto WHERE id_producto = ?');
        $query->execute([$id_producto]);
        $producto = $query->fetch(PDO::FETCH_OBJ);
        return $producto;
    }

    function agregarProducto($id_categoria, $tipo, $talle, $precio){
        $query = $this->db->prepare("INSERT INTO producto (id_categoria, tipo, talle, precio) VALUES ( ?, ?, ?, ?)");
        $query->execute([$id_categoria, $tipo, $talle, $precio]);
        return $this->db->lastInsertId();
    }

}