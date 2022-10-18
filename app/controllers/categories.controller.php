<?php

require_once './app/models/categories.model.php';
require_once './app/views/categories.view.php';
require_once './app/helpers/auth.helper.php';


class CategoriesController{

    private $model;
    private $view;

    public function __construct() {

        $this->model = new CategoriesModel();
        $this->view = new CategoriesView();

        

    }
    public function showFormCategories(){
        $categories = $this->model->getCategories();
        $this->view->showFormAddCategory($categories);

    }
    public function addCategory(){
        $c_name = $_POST['c_name'];

        $this->model->insertCategorytoDB($c_name);
        
        header("Location: " . BASE_URL . '/formcategory'); 
    }
    function deleteCategory($id){

                $this->model->deleteCategoryById($id);
                header("Location: " . BASE_URL . '/formcategory'); 
    }

    function showEditCategory($id){

        $categories = $this->model->getCategories();
        $toUpdate = $this->model->showCategoryToUpdate($id);

        $this->model->showCategoryToUpdate($id);
        $this->view->showFormEditCategory($categories, $toUpdate);


    }
    function updateCategory($id){

        $c_name = $_POST['c_name'];
        $this->model->updateCategorySelected($c_name,$id);
        header("Location: " . BASE_URL); 


    }
}