<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class CategoriesView{

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
        
    }
    function showCategoriesOptions($categories){

        $this->smarty->assign('categories', $categories);
        $this->smarty->display('templates/tableProducts.tpl');

    }
}