<?php 
require_once 'models/Category.php';
require_once 'models/Product.php';
$cates = Product::getAll();
var_dump($cates);die;
 ?>