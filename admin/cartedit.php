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
    $id_user = $_POST['id_user'];
    $id_product = $_POST['id_product'];
    $pty = $_POST['pty'];
    
    $cart->updateCart($id_user, $id_product ,$pty);

    header('location:carts.php');

          
}