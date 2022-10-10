<?php
require_once './app/controllers/product.controller.php';
require_once './app/controllers/categories.controller.php';
require_once './app/controllers/auth.controller.php';

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL ^ E_DEPRECATED ^ E_USER_DEPRECATED );

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

// instancio el unico controller que existe por ahora
$productController = new ProductController();
$categoriesController = new CategoriesController();
$authController = new AuthController();

// tabla de ruteo
switch ($params[0]) {
    case 'home':
        $productController->showProducts();
        break;
    case 'login':
        $authController->showLogin();
        break;
    case 'validate':
        $authController->validateUser();
        break;
    case 'add':
        $productController->addProduct();
        break;
    case 'delete':
        $id = $params[1];
        $productController->deleteProduct($id);
        break;
    /*case 'edit';
        $productController->editProduct($id);
    /*case 'search':
        if($params[1]=="product");
        $productController->searchProduct();*/ 
    default:
        echo('404 Page not found');
        break;
}
//listar items, categorias, filtro por categoria, filtro || alta y baja del item, update.

