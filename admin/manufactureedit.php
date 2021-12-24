<?php 
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protype.php";
$product = new Product;
$manufacture = new Manufacture;
$protype = new Protype;

//Edit manu
if(isset($_POST['submit'])){
    $id = $_POST['manu_id'];
   // var_dump($id);
    $name = $_POST['manu_name'];   
    //var_dump($name);
    $manufacture->editManufacture($id,$name); 
}

header('location: manufactures.php');
?>
