<?php 

require_once 'config.php';
require_once './libs/router.php';
require_once 'app/controller/producto.controller.php';

$router = new Router();

$router->addRoute('productos', 'GET', 'productController', 'mostrarTodos');

$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);