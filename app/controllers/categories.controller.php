<?php

require_once './app/models/categories.model.php';
require_once './app/views/categories.view.php';

class CategoriesController{

    private $model;
    private $view;

    public function __construct() {

        $this->model = new CategoriesModel();
        $this->view = new CategoriesView();
    }
    public function showCategoriesOptions(){
        $categories = $this->model->getCategories();

        $this->view->showCategoriesOptions($categories);
    }
}