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

$role_id;
if(isset($_POST['submit'])){
    foreach($user->getAllUser() as $value){
        if($value['user_id'] == $_POST['user_id']){

            $role_id = $value['role_id'];
        }
    }
    $user_id = $_POST['user_id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(isset($_POST['role_id'])){
        $role_id = $_POST['role_id'];
    }
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    //var_dump($user_id, $username, $password, $role_id, $fullname, $address, $email, $phone);
    $user->upUserAdmin( $user_id, $username, $password, $role_id, $fullname, $address, $email, $phone);
    header('location:users.php');
}

