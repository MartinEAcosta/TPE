<?php
require_once './app/controllers/product.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

// instancio el unico controller que existe por ahora
$taskController = new ProductController();


// tabla de ruteo
switch ($params[0]) {
    case 'home':
        $taskController->showProducts();
        $taskController->showCategories();
        break;
    default:
        echo('404 Page not found');
        break;
}
//listar items, categorias, filtro por categoria, filtro || alta y baja del item, update.

