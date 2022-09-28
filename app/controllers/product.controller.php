<?php

require_once './app/models/product.model.php';
require_once './app/views/product.view.php';

class ProductController{

    private $model;
    private $view;

    public function __construct() {

        $this->model = new ProductModel();
        $this->view = new ProductView();

    }
    
    public function showProducts(){

        $productos = $this->model->getProducts();
        $this->view->showProducts($productos);
    }

    function addProduct(){
                // TODO: validar entrada de datos

        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        
        $id = $this->model->insertProduct($name, $description, $price);
        
        header("Location: " . BASE_URL); 
            }
           
    function deleteTask($id) {
        $this->model->deleteProductById($id);
        header("Location: " . BASE_URL);
        
    }
        




    }
    

