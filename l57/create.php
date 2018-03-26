<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	
	<form action="save_create.php" method="post">
		Product name: <input type="text" name="ProductName" value="" placeholder="">
		<br>

		Supplier: <input type="number" name="SupplierID" value="" placeholder="">
		<br>

		Category: <input type="number" name="CategoryID" value="" placeholder="">
		<br>

		Quantity Per Unit: <input type="text" name="QuantityPerUnit" value="" placeholder="">
		<br>

		Unit Price: <input type="number" name="UnitPrice" value="" placeholder="">
		<br>
		
		Units In Stock: <input type="number" name="UnitsInStock" value="" placeholder="">
		<br>

		Units On Order: <input type="number" name="UnitsOnOrder" value="" placeholder="">
		<br>
		Discontinued: <input type="checkbox" name="Discontinued" value="1">
		<br>
		<button type="submit">Save</button>
	</form>
</body>
</html>