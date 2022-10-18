<?php


class ProductModel{
    private $db;

    // Abro conexion con base de datos.// 
    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_products;charset=utf8', 'root', '');
    }

    public function getProducts(){
        // categoria = c_name, con el as le di el nombre
        $query = $this->db-> prepare('SELECT Products. *, Categories.c_name as categoria FROM Products JOIN Categories ON Products.id_category = Categories.id_category ');
        $query->execute();


        $products = $query->fetchAll(PDO::FETCH_OBJ);

        return $products;

    }
    public function getCategories(){
        $query = $this->db->prepare('SELECT * FROM Categories');
        $query->execute();
        
        $categories = $query->fetchAll(PDO::FETCH_OBJ);

        return $categories;
    }
    public function getProductByID($id){

        $query = $this->db->prepare("SELECT Products. *, Categories.c_name as categoria FROM Products JOIN Categories ON Products.id_category = Categories.id_category WHERE id = ?");
        $query->execute([$id]);
        
        $detail = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $detail;


    }
    // Añadir producto a la base de datos (accion)
    public function insertProductDB($p_name , $price , $p_description , $stock , $id_category ){

        $query = $this->db->prepare("INSERT INTO Products (p_name, price, p_description, stock ,id_category) VALUES ( ? , ? , ? , ? , ?)");
        $query->execute([$p_name , $price , $p_description , $stock ,$id_category ]);

        return $this->db->lastInsertId(); 
    }

    public function showProductToUpdate($id){
        $query = $this->db->prepare("SELECT Products. *, Categories.c_name as categoria FROM Products JOIN Categories ON Products.id_category = Categories.id_category WHERE id = ?");
        $query->execute([$id]);
        
        $toUpdate = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $toUpdate;
    }

    public function updateProductDB($id, $p_name, $price, $p_description, $stock ,$img,  $id_category){

        
        $query= $this->db->prepare("UPDATE `Products` SET `p_name` = ? , `price` = ? , `p_description` = ? , `stock` =  ? , `img` = ?, `id_category` = ? WHERE `Products`.`id` = ?");
        $query->execute(array($p_name,$price,$p_description,$stock,$img,$id_category,$id));

    }

    function deleteProductById($id){    
        $query= $this->db->prepare('DELETE FROM Products WHERE id = ? ');
        $query->execute([$id]);
    }


    function filterByCategories($id){


        $query = $this->db->prepare('SELECT * FROM Products WHERE id_category = ? ');
        $query->execute([$id]);
        $category = $query->fetchAll(PDO::FETCH_OBJ);
        return $category;

    }
    }