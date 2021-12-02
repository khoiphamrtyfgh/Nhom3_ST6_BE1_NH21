<?php 
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protype.php";
$product = new Product;
$manufacture = new Manufacture;
$protype = new Protype;



if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $manu_id = $_POST['manu_id'] ;
    $type_id = $_POST['type_id'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $description = $_POST['description'];
    $feature = $_POST['feature'];
    $time = $_POST['time'];
    $time = str_replace("T"," ",$time);
    
    $product->addProduct($name, $manu_id, $type_id, $price, $image, $description, $feature,$time);
    
    $target_dir = "../img/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    header('location:products.php');
}