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

    function showProducts(){
        
        $products = $this->model->getProducts();
        
        $this->view->showProducts($products);

        
    }
    
    function showCategories(){

        $categories = $this->model->getCategories();

        $this->view->showCategories($categories);
    }



    }
    

