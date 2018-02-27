<?php 
require_once 'models/Category.php';
$cateModel = new Category();
// danh sach danh muc
$cateList = $cateModel->getAll();

// hien thi danh sach danh muc vao trong table

 ?>