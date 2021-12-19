<!-- Thông tin username và password
1. username: admin   password:123
2. username: user1   password:456
3. username: guest   password:789
4. username: demo123   password:987
5. username: newbie   password:654
 -->
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
    if ($user->checkLogin($username, $password)) {
        var_dump($user);
        foreach ($user as $value) {
            if ($value['role_id'] == 1) {
                $_SESSION['user'] = $username;
                header('location:../admin/index.php');
            } else {
                $_SESSION['user'] = $username;
                header('location:../index.php');
            }
        }
    } else {
        header('location:../index.php');
    }
}
