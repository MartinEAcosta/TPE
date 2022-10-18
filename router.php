<?php
require_once './app/controllers/product.controller.php';
require_once './app/controllers/auth.controller.php';
require_once './app/controllers/categories.controller.php';
require_once './app/helpers/auth.helper.php';


// para que me muestre los errores en ubuntu
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL ^ E_DEPRECATED ^ E_USER_DEPRECATED );

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion
$params = explode('/', $action);

// instancio los controladores
$productController = new ProductController();
$categoriesController = new CategoriesController();
$admHelper = new AuthHelper();

// tabla de ruteo
switch ($params[0]) {
    case 'home':
        $productController->showProducts();
        break;
    case 'product':
        $id= $params [1];
        $productController->showProductByID($id);
        break;
    // Iniciar sesion como administrador
    case 'login':
        $authController = new AuthController();
        $authController->showLogin();
        break;
    // Corrobora que sea admin para ejecutar tal accion
    case 'validate':
        $authController = new AuthController();
        $authController->validateUser();
        break;
    // salir, session destroy
    case 'logout':
        $authController = new AuthController();
        $authController->logout();
        break;
    // Muestra form en caso de ser admin
    case 'formproduct':
        $admHelper->checkLoggedIn();
        $productController->showAdd();
        break;
    // agrego producto a base de datos y a tabla si soy adm
    case'add':
        $admHelper->checkLoggedIn();
        $productController->addProduct();
        break;
    case'formcategory':
        $admHelper->checkLoggedIn();
        $categoriesController->showFormCategories();
        break;
    // En caso de ser administrado agrega el producto a nuestra base
    case'addcategory':
        $admHelper->checkLoggedIn();
        $categoriesController->addCategory();
        break;
    // Borro en caso de ser admin
    case 'delete':
        $admHelper->checkLoggedIn();
        $id = $params[1];
        $productController->deleteProduct($id);
        break;
    case 'deletecategory':
        $admHelper->checkLoggedIn();
        $id = $params[1];
        $categoriesController->deleteCategory($id);
        break;
    // muestra el form
    case'editform':
        $admHelper->checkLoggedIn();
        $id = $params[1];
        $productController->showEdit($id);
        break;
    // accion de editar
    case 'edit':
        $admHelper->checkLoggedIn();
        $id = $params[1];
        $productController->updateProduct($id);
        break;
    case 'editformcategory':
        $admHelper->checkLoggedIn();
        $id = $params[1];
        $categoriesController->showEditCategory($id);
        break;
    case 'editcategory':
        $admHelper->checkLoggedIn();
        $id= $params[1];
        $categoriesController->updateCategory($id);
        break;
    // toma por parametro el id de la categoria y lo muestra
    case 'filter':
        $id=$params[1];
        $productController->filterByCategories($id);
        break;
    default:
        echo('404 Page not found');
        break;
}
//listar items, categorias, filtro por categoria, filtro || alta y baja del item, update.

