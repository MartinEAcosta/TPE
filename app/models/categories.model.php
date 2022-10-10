<?php


class CategoriesModel{
    private $db;

    // Abro conexion con base de datos.// 
    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_products;charset=utf8', 'root', '');
    }
    function getCategories(){

        $query = $this->db->prepare('SELECT Categories.*');
        $query->execute();

        $categories = $query->fetchAll(PDO::FETCH_OBJ);

        return $categories;
    }
}