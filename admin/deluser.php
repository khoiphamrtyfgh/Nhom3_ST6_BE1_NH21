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

if(isset($_GET['id'])){
    $user->deleteUser($_GET['id']);

    header('location:users.php');
}