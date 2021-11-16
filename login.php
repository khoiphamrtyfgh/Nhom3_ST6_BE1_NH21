<?php
session_start();
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
if ($username != NULL && $password != NULL) {
    $_SESSION['user'] = $username;
    header("location:index.php");
} else {
    
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="css/dangnhap.css" />
</head>

<body>
    <form action='login.php' class="dangnhap" method='POST'>
        Tên đăng nhập <input type='text' name='username' />
        Mật khẩu <input type='password' name='password' />
        <input type='submit' class="button" name="dangnhap" value='Đăng nhập' />
        <form>
</body>

</html>