<?php 
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protype.php";
$product = new Product;
$manufacture = new Manufacture;
$protype = new Protype;

if(isset($_GET['type_id'])){
    
    if(count($product->checkType($_GET['type_id'])) == null){
        $protype->delProtype($_GET['type_id']);
        header('location:protype.php');
    }else{
        echo '<script language="javascript">alert("Không Thể Xóa!"); window.location="protype.php";</script>';
            
    }

    
}