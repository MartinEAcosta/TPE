<?php


class ProductModel{

// Abro conexion con base de datos.// 
function connect(){
    $db = new PDO('mysql:host=localhost;'.'dbname=db_products;charset=utf8', 'root', '');
    return $db;
}
// El return nos devuelve los productos de la base de datos

function getProducts(){

    $db = $this-> connect();

    //duda from ¿A que se refiere? Tabla o que
    $query = $db-> prepare('SELECT * FROM Products');
    $query->execute();

    $products = $query->fetchAll(PDO::FETCH_OBJ);

    return $products;

}




}