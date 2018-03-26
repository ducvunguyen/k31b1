<?php 
require_once 'db.php';
$productId = $_GET['productId'];

// chuẩn bị câu lệnh sql với tham số :id
$sql = "delete from products where ProductID = :id";

// nạp câu lệnh vào kết nối
$stmt = $connect->prepare($sql);

// gán giá trị cho :id trong câu lệnh
$stmt->bindValue(':id', $productId);

// thực thi câu lệnh với csdl
$stmt->execute();
header('location: index.php');
 ?>