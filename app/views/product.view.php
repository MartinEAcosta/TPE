<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class ProductView{

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
        
    }


    function showProducts($products){

        $this->smarty->assign('products', $products);
        $this->smarty->display('templates/tableProduct.tpl');

    } 
    
    function showCategories($categories){
        foreach ($categories as $category){
            echo "<td>$category->name</td>";
        }
    }
    
    
    }