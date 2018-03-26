<?php 
require_once 'models/Category.php';
$cateModel = new Category();
$model = $cateModel->findOne($_GET['id']);
include_once 'form.php';

 ?>