<?php 
$hint = "../";
require_once $hint.'app/models/Category.php';
$model = new Category();
$name = $_GET['name'];
$list = $model->getCategoryByName($name);

if(count($list) > 0){
	echo true;
}else{
	echo false;
}


 ?>