<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class ProductView{

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
        
    }


    function showProducts($products,$categories){
        
        $this->smarty->assign('products', $products);
        $this->smarty->assign('categories', $categories);

        $this->smarty->display('templates/tableProducts.tpl');

    }
    function showProductDetail($detail,$categories){
        $this->smarty->assign('detail',$detail);
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('templates/product.tpl');


    }

    function showFormAdd($products, $categories){

        $this->smarty->assign('products', $products);
        $this->smarty->assign('categories', $categories);

        $this->smarty->display('templates/addProduct.tpl');

    }

    function showFormEdit($products ,$categories,$toUpdate){
        $this->smarty->assign('products', $products);
        $this->smarty->assign('categories',$categories);
        $this->smarty->assign('toUpdate', $toUpdate);

        $this->smarty->display('templates/editProduct.tpl');
    }


    function showProductsFiltered($category ,$categories, $products){
        
        $this->smarty->assign('products', $products);
        $this->smarty->assign('category', $category);
        $this->smarty->assign('categories', $categories);

        $this->smarty->display('templates/filter.tpl');
    }
    }