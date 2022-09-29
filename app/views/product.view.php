<?php


class ProductView{

    function showProducts($products){
        include './templates/header.php';
        include './index.php';

        echo "<table class='table'>
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Stock</th>
                    </tr>
                </thead>
                <tbody>";
        foreach($products as $product){
            
            echo "<tr> <td> $product->name </td> <td> $product->price </td> <td> $product->stock </td> </tr>";
   
        }
        echo "</tbody>
            </table>";       



        include './templates/footer.php';
    } 
    
    
    
    }