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
    $type_id = $_POST['type_id'];
   // var_dump($id);
    $type_name = $_POST['type_name'];   
    //var_dump($name);
    $protype->editProtype($type_id,$type_name); 
}

header('location:protype.php');
?>
