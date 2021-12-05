<?php
include "header.php";

$username = $_POST['username'] ?? '';
$phone = $_POST['phone'] ??'';
$address = $_POST['address']??'';
$email = $_POST['email']??'';

if ($username != NULL &&$phone != NULL &&  $address != NULL && $email != NULL) {
    $_SESSION['user'] = $username;
    header("location:index.php");
} else {
    
}

?>

    <form action='register.php' class="dangki" method='POST'>
         Tên <input type='text' name='username' >
         Số điện thoại <input type='text' name='phone' >
         Địa chỉ <input type='text' name='address' >
         Email<input type='text' name='email' >
        <input type='submit' class="button" name="dangki" value='Đăng kí' >
 
    </form>
</body>
</html>
<?php
include "footer.html";
?>