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
    $manu_name = $_POST['manu_name'];

    $manufacture->addManufacture($manu_name);

    header('location:manufactures.php');
}