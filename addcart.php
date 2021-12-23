<?php
	include "header.php";
	//var_dump($_SESSION['id_user']);
	$id_user;
	if(isset($_SESSION['id_user'])){
		$id_user = $_SESSION['id_user'];
	}else{
		echo '<script language="javascript">alert("Chưa Đăng Nhập!"); window.location="index.php";</script>';
	}
?>
<center>
<h1> Your Cart</h1>
<table border="1">
    <tr>
        <td><center>ID</center></td>
        <td><center>Name</center></td>
		<td><center>Img</center></td>
		<td><center>Quantily</center></td>
		<td><center>Price</center></td>
		<td><center>Add one</center></td>
		<td><center>Delete All</center></td>
		<td><center>Delete one</center></td>
	</tr>
    <?php
	$carts = $product->getAllProductByCart($id_user);
	//var_dump($carts);
	if(isset($_GET['id'])){
		$tam = 0;
		foreach($carts as $value){
			if($value['id_product'] == $_GET['id']){
				
				$tam = 1;
				$tam1 = $value['pty'] + 1;
				$cart->updateCart($id_user, $value['id_product'], $tam1);
				//header('location:addcart.php');
				break;
			}
		}
		if($tam == 0){
			$cart->addCart($id_user, $_GET['id'] , 1);
			///header('location:addcart.php');
		}
	}
	$tongtien = 0;
	$cartsnew = $product->getAllProductByCart($id_user);
	$id_tam = 1;
	foreach($cartsnew as $value){
		$tongtien = $tongtien + $value['pty']*$value['price'];
		
	?>
	<tr>
        <td><center> <?php echo $id_tam++ ?></center></td>
        <td><center> <?php echo $value['name'] ?></center></td> 
		<td><center> <img width ="70px" src="./img/<?php echo $value['image'];?>" alt=""> </center></td>
		<td><center> <?php echo $value['pty'] ?></center></td>
		<td><center> <?php echo number_format($value['price']) ?> VNĐ</center></td>
		<td><center><a href="add1.php?id=<?php echo $value['id_product'] ?>"> Add one</a></center></td>
		<td><center><a href='delall.php?id=<?php echo $value['id_product'] ?>'> Delete All</a></center></td>
        <td><center><a href='del1.php?id=<?php echo $value['id_product'] ?>'> Delete one</a></center></td> 
    </tr>
	<?php 
	}
	?>
	</table>
</center>
<center><h1>Tổng Tiền</h1></center>
<center><h1><?php echo number_format($tongtien) ?> VNĐ</h1></center>
<center><h3><a href="bill.php">In hóa đơn</a></h3></center>
<?php

include "footer.html";
?>