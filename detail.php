<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Detail</title>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>

<body>
    <?php
    include 'products.php';
    if(isset($_GET['id'])){
        foreach ($products as $value){
            if($value['id'] == $_GET['id']){
    ?>
    <form action="" method="get">
    <div class="sanpham">
		<img src="public/images/<?php echo $value['image'];?>">
		<h1><a href='#' ><?php echo $value['name'];?> </a> </h1>
		<b>Giá: </b> <span class='gia'> <?php echo $value['price'];?> </span><br>
		<p> <?php echo $value['desc'];?> </p>
		<a class="addcart" href="addcart.php?id=<?php echo $value['id'];?>">Add To Cart</a>
	</div>
    </form>
    <?php   
            }
        }
    }

    ?>

</body>

</html>