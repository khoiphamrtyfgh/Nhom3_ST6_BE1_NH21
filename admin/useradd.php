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

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'] ;
    $rolt_id = $_POST['rolt_id'];
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    $user->addUserAdmin($username, $password, $rolt_id, $fullname, $address, $email, $phone);

    header('location:users.php');
}