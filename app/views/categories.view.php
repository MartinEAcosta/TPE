<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class CategoriesView{

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
        
    }
    function showFormAddCategory($categories){

        $this->smarty->assign('categories', $categories);
        $this->smarty->display('templates/addCategory.tpl');

    }

    function showFormEditCategory($categories,$toUpdate){


        $this->smarty->assign('categories',$categories);
        $this->smarty->assign('toUpdate', $toUpdate);

        $this->smarty->display('templates/editCategory.tpl');
    }
}