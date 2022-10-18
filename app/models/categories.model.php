<?php


class CategoriesModel{
    private $db;

    // Abro conexion con base de datos.// 
    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_products;charset=utf8', 'root', '');
    }

    public function getCategories(){
        $query = $this->db->prepare('SELECT * FROM Categories');
        $query->execute();
        
        $categories = $query->fetchAll(PDO::FETCH_OBJ);

        return $categories;
    }
    public function insertCategorytoDB($c_name){
        $query = $this->db->prepare("INSERT INTO Categories (c_name) VALUES (?)");
        $query->execute([$c_name]);

        return $this->db->lastInsertId(); 
    }
    function deleteCategoryById($id){

        $query= $this->db->prepare('DELETE FROM Categories WHERE id_category = ? ');
        $query->execute([$id]);
    }
    function showCategoryToUpdate($id){
        $query = $this->db->prepare("SELECT * FROM Categories WHERE id_category = ?");
        $query->execute([$id]);
        
        $toUpdate = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $toUpdate;
    }
    function getByCategories($id){

        $query = $this->db->prepare('SELECT * FROM Products WHERE id_category = ? ');
        $query->execute([$id]);
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;

    }
    function updateCategorySelected($c_name,$id){
        $query= $this->db->prepare("UPDATE `Categories` SET `c_name` = ?  WHERE `Categories`.`id_category` = ?");
        $query->execute(array($c_name,$id));
    }
}