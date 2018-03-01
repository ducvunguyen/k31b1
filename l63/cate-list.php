<?php 
require_once 'models/Category.php';
$cateModel = new Category();

$cateModel->name = 'nguyen anh van';
$cateModel->description = 'trung jackpot';
$cateModel->insert();
// danh sach danh muc
$cateList = $cateModel->getAll();
var_dump($cateList);
// $cateModel->delete(2);

// echo "===========================<br>";

// $cateList = $cateModel->getAll();
// var_dump($cateList);
// hien thi danh sach danh muc vao trong table

 ?>