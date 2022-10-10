<?php

require_once './app/models/product.model.php';
require_once './app/views/product.view.php';
require_once './app/helpers/auth.helper.php';


class ProductController{

    private $model;
    private $view;

    public function __construct() {

        $this->model = new ProductModel();
        $this->view = new ProductView();

    }

    public function showProducts(){
        
        $products = $this->model->getProducts();
        
        $this->view->showProducts($products);

        
    }
    function showFormAdd(){

        $this->view->showFormAdd();
    }
    function addProduct(){
        
        $productAdd =  $_POST['nameProd'];
        $priceAdd = $_POST['priceProd'];
        $descAdd = $_POST['descProd'];
        $stockAdd = $_POST['stockProd'];
        $categoryAdd = $_POST['catProd'];

        $id = $this->model->insertProductDB($productAdd,$priceAdd,$descAdd,$stockAdd,$categoryAdd);

        header("Location: " . BASE_URL); 

    }
    function deleteProduct($id){
        $this->model->deleteProductById($id);
        header("Location: " . BASE_URL); 
    }
    }
    

