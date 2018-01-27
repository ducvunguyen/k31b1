<?php 
require_once 'db.php';

$productId = isset($_GET['productId']) == true ? $_GET['productId'] : header('location: index.php');

$sql = "
	select * 
	from Products 
	where ProductID = $productId
";

$stmt = $connect->prepare($sql);
$stmt->execute();
$product = $stmt->fetch();

// var_dump();die;

$cheked = $product['Discontinued'] == 1 ? "checked" : "";
 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	
	<form action="save_update.php" method="post">
		<input type="hidden" name="ProductID" value="<?php echo $productId ?>">
		Product name: <input type="text" name="ProductName" value="<?php echo $product['ProductName'] ?>" placeholder="">
		<br>

		Supplier: <input type="number" name="SupplierID" value="<?php echo $product['SupplierID'] ?>" placeholder="">
		<br>

		Category: <input type="number" name="CategoryID" value="<?php echo $product['CategoryID'] ?>" placeholder="">
		<br>

		Quantity Per Unit: <input type="text" name="QuantityPerUnit" value="<?php echo $product['QuantityPerUnit'] ?>" placeholder="">
		<br>

		Unit Price: <input type="number" name="UnitPrice" value="<?php echo $product['UnitPrice'] ?>" placeholder="">
		<br>
		
		Units In Stock: <input type="number" name="UnitsInStock" value="<?php echo $product['UnitsInStock'] ?>" placeholder="">
		<br>

		Units On Order: <input type="number" name="UnitsOnOrder" value="<?php echo $product['UnitsOnOrder'] ?>" placeholder="">
		<br>
		Discontinued: <input type="checkbox" name="Discontinued" value="1"
		<?php echo $cheked; ?>>
		<br>
		<button type="submit">Save</button>
	</form>
</body>
</html>