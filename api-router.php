<?php 

require_once 'config.php';
require_once './libs/router.php';
require_once 'app/controller/producto.controller.php';

$router = new Router();

$router->addRoute('productos', 'GET', 'productController', 'mostrarTodos'); // mostrar todos los productos
$router->addRoute('productos/:id', 'GET', 'productController', 'productoById'); // mostrar un producto por id
$router->addRoute('productos', 'POST', 'productController', 'agregarProducto'); // agregar producto
$router->addRoute('productos/:id', 'PUT', 'productController', 'editarProducto'); // editar producto

$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);