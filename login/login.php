<?php
session_start();
require "../config.php";
require "../models/db.php";
require "../models/user.php";
$user = new User;
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($user->checkLogin($username, $password)) {
        $acc = $user->checkLogin($username, $password);
        foreach($acc as $value){
            if ($value['role_id'] == 0){
                $_SESSION['user_id'] = $value['user_id'];
                echo '<script language="javascript">alert("Đăng Nhập admin Thành Công!"); window.location="../admin";</script>'; 
            } else {
                $_SESSION['user_id'] = $value['user_id'];
                echo '<script language="javascript">alert("Đăng Nhập Thành Công!"); window.location="../index.php";</script>';
            }
        }
    } else {
        echo '<script language="javascript">alert("Đăng Nhập thất bại!"); window.location="index.php";</script>';
    }
}