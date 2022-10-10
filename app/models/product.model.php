<?php


class ProductModel{
    private $db;

    // Abro conexion con base de datos.// 
    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_products;charset=utf8', 'root', '');
    }

    function getProducts(){
        // categoria = c_name, con el as le di el nombre
        $query = $this->db-> prepare('SELECT Products. *, Categories.c_name as categoria FROM Products JOIN Categories ON Products.id_category = Categories.id_category ');
        $query->execute();

        $products = $query->fetchAll(PDO::FETCH_OBJ);

        return $products;

    }

    public function insertProductDB($productAdd,$priceAdd,$descAdd,$stockAdd,$categoryAdd){

        $query = $this->db->prepare("INSERT INTO Products (p_name, price, p_description, stock, id_category) VALUES (?, ?, ?, ?, ?)");
        $query->execute([$productAdd,$priceAdd,$descAdd,$stockAdd,$categoryAdd]);

        return $this->db->lastInsertId();

    }
    

    function deleteProductById($id){    
        $query= $this->db->prepare('DELETE FROM Products WHERE id = ? ');
        $query->execute([$id]);
    }
    }