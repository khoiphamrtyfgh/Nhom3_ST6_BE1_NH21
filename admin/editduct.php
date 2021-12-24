<?php 
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protype.php";
$product = new Product;
$manufacture = new Manufacture;
$protype = new Protype;


$manu_id;
$type_id;
$description;
$time;
$image;
$feature;
if(isset($_POST['submit'])){
    foreach($product->getAllProducts() as $value){
        if($value['id'] == $_POST['id']){

            $manu_id = $value['manu_id'];
            $type_id = $value['type_id'];
            $description = $value['description'];
            $time = $value['created_at'];
            $image = $value['image'];
            $feature = $value['feature'];
        }
    }
    $id = $_POST['id'];

    $name = $_POST['name'];

    if(isset($_POST['manu_id'])){
        $manu_id = $_POST['manu_id'];
    }

    if(isset($_POST['type_id'])){
        $type_id = $_POST['type_id'];
    }

    $price = $_POST['price'];

    if(strlen($_FILES['image']['name'])!=0){
        $image = $_FILES['image']['name'];
    }

    if(isset($_POST['description'])){
        $description = $_POST['description'];
    }

    if(isset($_POST['feature'])){
        $feature = $_POST['feature'];
    }

    $time = date('Y-m-d h:i:s', time());

    $product->upProduct($id ,$name, $manu_id, $type_id, $price, $image, $description, $feature,$time);

    //var_dump($id ,$name, $manu_id, $type_id, $price, $image, $description, $feature,$time);
    if(strlen($_FILES['image']['name'])!=0){
        $target_dir = "../img/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    }

    header('location:products.php');
}