<?php 
require_once 'db.php';


$ProductName = $_POST['ProductName'];
$SupplierID = $_POST['SupplierID'];
$CategoryID = $_POST['CategoryID'];
$QuantityPerUnit = $_POST['QuantityPerUnit'];
$UnitPrice = $_POST['UnitPrice'];
$UnitsInStock = $_POST['UnitsInStock'];
$UnitsOnOrder = $_POST['UnitsOnOrder'];
$Discontinued = isset($_POST['Discontinued'])== true ? 1 : 0;
$sql = "
	insert into Products 
	(	ProductName, 
		SupplierID, 
		CategoryID, 

		QuantityPerUnit,
		UnitPrice, 
		UnitsInStock, 

		UnitsOnOrder, 
		Discontinued)
	values
	(	:ProductName, 
		:SupplierID, 
		:CategoryID, 

		:QuantityPerUnit,
		:UnitPrice, 
		:UnitsInStock, 

		:UnitsOnOrder, 
		:Discontinued)

";
// nạp câu lệnh vào kết nối
$stmt = $connect->prepare($sql);

$stmt->bindValue(':ProductName', $ProductName);
$stmt->bindValue(':SupplierID', $SupplierID);
$stmt->bindValue(':CategoryID', $CategoryID);

$stmt->bindValue(':QuantityPerUnit', $QuantityPerUnit);
$stmt->bindValue(':UnitPrice', $UnitPrice);
$stmt->bindValue(':UnitsInStock', $UnitsInStock);

$stmt->bindValue(':UnitsOnOrder', $UnitsOnOrder);
$stmt->bindValue(':Discontinued', $Discontinued);
try{
	// thực thi câu lệnh với csdl
	$stmt->execute();
	header('location: index.php');
}catch(Exception $ex){
	var_dump($ex->getMessage());
}


 ?>