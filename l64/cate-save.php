<?php 
require_once 'models/Category.php';
$cateModel = new Category();
$id = $_POST['id'];
if($id > 0){
	$model = $cateModel->findOne($id);
}else{
	$model = new Category();
}

$model->name = $_POST['name'];
$model->description = $_POST['description'];

if($id > 0 ){
	$model->update();
}else{
	$model->insert();
}

header('location: cate-list.php');
 ?>