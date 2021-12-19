
<?php
session_start();
require "../config.php";
require "../models/db.php";
require "../models/user.php";
$user = new User;
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    var_dump($username, $password);
    var_dump($user->checkLogin($username, $password));
    if ($user->checkLogin($username, $password)) {
        $acc = $user->checkLogin($username, $password);
        foreach ($acc as $value) {
            var_dump($value['role_id']);
            if ($value['role_id'] == 0) {
                echo '<script language="javascript">alert("Đăng Nhập admin Thành Công!"); window.location="index.php";</script>';
                $_SESSION['user'] = $username;
                header('location:../admin');
            } else {
                echo '<script language="javascript">alert("Đăng Nhập Thành Công!"); window.location="index.php";</script>';
                $_SESSION['user'] = $username;
                header('location:../index.php');
            }
        }
    } else {
        echo '<script language="javascript">alert("Đăng Nhập thất bại!"); window.location="index.php";</script>';
        header('location:../index.php');
    }
}
