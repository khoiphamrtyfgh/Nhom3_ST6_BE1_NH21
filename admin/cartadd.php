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
    
    if($user->checkUser2($_POST['id_user']) != null){

        if($product->checkProduct($_POST['id_product']) != null){

            if($cart->checkCart($_POST['id_user'], $_POST['id_product']) == null){

                $id_user = $_POST['id_user'];
                $id_product = $_POST['id_product'];
                $pty = $_POST['pty'];

                $cart->addCart($id_user, $id_product ,$pty);

                header('location:carts.php');

            }else{
                echo '<script language="javascript">alert("Trùng Cart!"); window.location="addcart.php";</script>';
            }
            
        }else{
            echo '<script language="javascript">alert("Không có Product này!"); window.location="addcart.php";</script>'; 
        }
        
    }else{
        echo '<script language="javascript">alert("Không có User này!"); window.location="addcart.php";</script>'; 
    }
    
}