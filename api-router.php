<?php 

require_once 'config.php';
require_once './libs/router.php';
require_once 'app/controller/producto.controller.php';

$router = new Router();

$router->addRoute('productos', 'GET', 'productController', 'mostrarTodos');
$router->addRoute('productos/:id', 'GET', 'productController', 'productoById');

$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);