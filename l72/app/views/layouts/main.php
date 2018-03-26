<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $title ?></title>
	<!-- css here! -->
	<link rel="stylesheet" href="">

</head>
<body>
	
	<h2>header</h2>
	<?php 
	$cartProduct = 0;
	if(isset($_SESSION['cart'])){
		
		foreach ($_SESSION['cart'] as $item) {
			$cartProduct += $item['quantity'];
		}
	}
	 ?>
	 <a href="thanh-toan.php" title="">Hiện có <?=$cartProduct?> sản phẩm trong giỏ hàng</a>
	 <br>
	<?php 
		include_once $view;

	 ?>

	<h2>footer</h2>
	<!-- javascript here -->
</body>
</html>