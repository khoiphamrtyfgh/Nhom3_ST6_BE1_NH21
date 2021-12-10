<?php
class Logout {
	public function __construct()
	{
		unset($_SESSION['user']); // xóa session user đã tạo khi đăng nhập
		header('Location:login1.php'); // chuyển hướng về trang chủ
	}
}
$logout = new Logout();
?>