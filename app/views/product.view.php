<?php


class ProductView{

    function showProducts($products){
        include './templates/header.php';
        include './index.php';

        echo "<ul class='list-group mt-5'>";
        foreach($products as $product){
            echo "<li class='list-group-item'>
                $product->name | $product->price | $product->stock
                </li>";
        }
        echo "</ul>";       



        include './templates/footer.php';
    } 
    
    
    
    }