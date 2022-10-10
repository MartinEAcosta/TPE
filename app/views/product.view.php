<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class ProductView{

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
        
    }


    function showProducts($products){

        $this->smarty->assign('products', $products);
        $this->smarty->display('templates/tableProducts.tpl');

    }

    function showFormAdd(){
        
        $this->smarty->display('templates/addProduct.tpl');

    }
    }