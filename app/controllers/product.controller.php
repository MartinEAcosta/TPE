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
        if (session_status() != PHP_SESSION_ACTIVE){
        session_start();
        }
        

    }
    
    public function showProducts(){
        
        $products = $this->model->getProducts();
        $categories = $this->model->getCategories();
        $this->view->showProducts($products, $categories);

        
    }
    public function showProductByID($id){
        $categories = $this->model->getCategories();
        $detail = $this->model->getProductByID($id);
        $this->view->showProductDetail($detail,$categories);



    }
    public function showAdd(){
        $products = $this->model->getProducts();
        $categories = $this->model->getCategories();
        $this->view->showFormAdd($products, $categories);

    }
    public function addProduct(){
        
        $p_name = $_POST['p_name'];
        $price = $_POST['price'];
        $p_description = $_POST['p_description'];
        $stock = $_POST['stock'];
        $id_category = $_POST['id_category'];

        $this->model->insertProductDB($p_name, $price, $p_description, $stock, $id_category);
        header("Location: " . BASE_URL); 
        
    }
    public function showEdit($id){
        $products = $this->model->getProducts();
        $categories = $this->model->getCategories();
        $toUpdate = $this->model->showProductToUpdate($id);

        $this->model->showProductToUpdate($id);
        $this->view->showFormEdit($products ,$categories, $toUpdate);
    }
    public function updateProduct($id){

    
        $p_name = $_POST['p_name'];
        $price = $_POST['price'];
        $p_description = $_POST['p_description'];
        $stock = $_POST['stock'];
        $img = null;
        $id_category = $_POST['id_category'];

        $this->model->updateProductDB($id,$p_name, $price, $p_description, $stock,$img,$id_category);
        header("Location: " . BASE_URL); 

    }
    public function filterByCategories($id){
        $products = $this->model->getProducts();
        $categories = $this->model->getCategories();
        $category = $this->model->filterByCategories($id);
        $this->view->showProductsFiltered($category,$categories,$products);
    }
    function deleteProduct($id){
        $this->model->deleteProductById($id);
        header("Location: " . BASE_URL); 
    }

    }
    

