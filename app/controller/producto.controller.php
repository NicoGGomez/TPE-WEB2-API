<?php 

require 'app/model/producto.model.php';
require 'app/view/api.view.php';

class productController {
    private $productModel;
    private $viewApi;
    private $data;

    function __construct(){
        $this->productModel = new productModel();
        $this->viewApi = new apiView();

        // lee el body del request
        $this->data = file_get_contents("php://input");
    }

    function mostrarTodos($params = null){
        if(isset($_GET['sortby']) && isset($_GET['order'])){
            if(($_GET['sortby'] == 'id_producto' || $_GET['sortby'] == 'tipo' || $_GET['sortby'] == 'talle' || $_GET['sortby'] == 'precio') && ($_GET['order'] == 'ASC' || $_GET['order'] == 'DESC')){
                $productos = $this->productModel->sortByOrder($_GET['sortby'], $_GET['order']);
                return $this->viewApi->response($productos, 200);
            } else {
                return $this->viewApi->response("Los campos son invalidos", 400);
            }
        } else {
            $productos = $this->productModel->getAll();
            return $this->viewApi->response($productos, 200);
        }
    }

    function productoById($params = null){
        $id_producto = $params[':id'];
        $producto = $this->productModel->productoById($id_producto);
        if($producto){
            $this->viewApi->response($producto, 200);
        } else {
            $this->viewApi->response("El producto con el id " . $id_producto . " no existe", 404);
        }
    }

}