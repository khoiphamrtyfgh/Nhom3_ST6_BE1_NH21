<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>cart</title>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>
<style>
a:hover {color:red;}
a {
text-decoration: none;
font-size:25px;
}
</style>
<body>
<a href="index.php">EXIT</a>

<?php
	include 'products.php';
	if(isset($_GET['id'])){
		$id = $_GET['id'];

		if(isset($_SESSION['cart'][$id])){
			$qty = $_SESSION['cart'][$id] + 1;
		}else{
			$qty = 1;
		}
		$_SESSION['cart'][$id] = $qty;
	}
?>

	<h1>Your cart</h1>
<table border="1" cellspacing="0" cellpadding="5">
	<tr>
		<th>#id</th>
		<th>Name</th>
		<th>Quantity</th>
		<th>Price</th>
		<th>Action</th>
	</tr>
	<?php
	foreach($_SESSION['cart'] as $key => $value1){
		foreach($products as $value2){
			if($value2['id'] == $key){
	?>
		<tr>
		
		<td><?php echo $value2['id'] ?></td>
		<td><?php echo $value2['name'] ?></td>	
		<td><?php echo $value1 ?></td>
		<td><?php echo $value2['price'] ?></td>
		<td><a href="delete.php?id=<?php echo $value2['id'];?>">Delete</a>
		</td>
		<?php } 
		}
	}

	?>
</table>

</body>
</html>