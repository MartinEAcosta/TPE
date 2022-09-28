<?php


class ProductModel{

    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_products;charset=utf8', 'root', '');
    }
    public function getProducts(){
        $query = $this->db->prepare("SELECT * FROM Products");
        $query->execute();
        $products = $query->fetchAll(PDO::FETCH_OBJ);

        return $products;

    }
}