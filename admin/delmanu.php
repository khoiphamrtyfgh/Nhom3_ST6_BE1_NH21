<?php 
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protype.php";
$product = new Product;
$manufacture = new Manufacture;
$protype = new Protype;

if(isset($_GET['manu_id'])){

    if(count($product->checkManu($_GET['manu_id'])) == null){
        $manufacture->delManufacture($_GET['manu_id']);
        header('location:manufactures.php');
    }else{
        echo '<script language="javascript">alert("Không Thể Xóa!"); window.location="manufactures.php";</script>'; 
    }
}