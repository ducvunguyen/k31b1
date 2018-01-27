<?php 
require_once 'db.php';


$ProductID = $_POST['ProductID'];
$ProductName = $_POST['ProductName'];
$SupplierID = $_POST['SupplierID'];
$CategoryID = $_POST['CategoryID'];
$QuantityPerUnit = $_POST['QuantityPerUnit'];
$UnitPrice = $_POST['UnitPrice'];
$UnitsInStock = $_POST['UnitsInStock'];
$UnitsOnOrder = $_POST['UnitsOnOrder'];
$Discontinued = isset($_POST['Discontinued'])== true ? 1 : 0;
$sql = "
	update Products 
	set	ProductName 		= :ProductName,
		SupplierID 			= :SupplierID, 
		CategoryID 			= :CategoryID, 

		QuantityPerUnit	 	= :QuantityPerUnit,
		UnitPrice 			= :UnitPrice, 
		UnitsInStock 		= :UnitsInStock, 

		UnitsOnOrder 		= :UnitsOnOrder, 
		Discontinued 		= :Discontinued
	where ProductID 		= :ProductID

";
// nạp câu lệnh vào kết nối
$stmt = $connect->prepare($sql);

$stmt->bindValue(':ProductID', $ProductID);
$stmt->bindValue(':ProductName', $ProductName);
$stmt->bindValue(':SupplierID', $SupplierID);
$stmt->bindValue(':CategoryID', $CategoryID);

$stmt->bindValue(':QuantityPerUnit', $QuantityPerUnit);
$stmt->bindValue(':UnitPrice', $UnitPrice);
$stmt->bindValue(':UnitsInStock', $UnitsInStock);

$stmt->bindValue(':UnitsOnOrder', $UnitsOnOrder);
$stmt->bindValue(':Discontinued', $Discontinued, PDO::PARAM_INT);
try{
	// thực thi câu lệnh với csdl
	$stmt->execute();
	header('location: index.php');
}catch(Exception $ex){
	var_dump($ex->getMessage());
}


 ?>
