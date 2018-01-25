<?php 
require_once 'db.php'; // lay ket noi den csdl => $connect

$keyword = isset($_GET['keyword']) == true ? $_GET['keyword'] : null;

// cau lenh de lay toan bo du lieu cua bang products
$sql = "select * from Products where ProductName like '%$keyword%'";
// nap cau lenh tren vao ket noi den csdl
$stmt = $connect->prepare($sql);
// thuc thi cau lenh voi csdl
$stmt->execute();
// lay ra toan bo ket qua tra ve
$products = $stmt->fetchAll();

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

 	<form action="" method="get">
 		<input type="text" name="keyword" value="<?php echo $keyword ?>" placeholder="Tim kiem">
 		<button type="submit">submit</button>
 	</form>
 	<table>
 		<thead>
 			<tr>
 				<th>Product ID</th>
 				<th>Product Name</th>
 				<th>Quantity Per Unit</th>
 				<th>Unit Price</th>
 				<th>Units In Stock</th>
 				<th>Units On Order</th>
 			</tr>
 		</thead>
 		<tbody>
 			<?php foreach ($products as $pr): ?>
 			<tr>
 				<td><?php echo $pr['ProductID'] ?></td>
 				<td><?php echo $pr['ProductName'] ?></td>
 				<td><?php echo $pr['QuantityPerUnit'] ?></td>
 				<td><?php echo $pr['UnitPrice'] ?></td>
 				<td><?php echo $pr['UnitsInStock'] ?></td>
 				<td><?php echo $pr['UnitsOnOrder'] ?></td>
 			</tr>
 			<?php endforeach ?>
 		</tbody>
 	</table>
 </body>
 </html>