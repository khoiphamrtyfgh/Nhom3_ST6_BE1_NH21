<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protype.php";
require "models/cart.php";
require "models/user.php";
$product = new Product;
$manufacture = new Manufacture;
$protype = new Protype;
$cart = new Cart;
$user = new User;


if(isset($_GET['id_user'])){
    if(isset($_GET['id_product'])){
        $cart->deleteCart1($_GET['id_user'],$_GET['id_product']);

        header('location:carts.php');
    }
}