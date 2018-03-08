<?php 
require_once 'app/models/Category.php';
class HomepageController{
	function index(){
		$model = new Category();
		$data = $model->getCateList();

		$title = "Trang chủ";
		$view = "app/views/homepage.php";
		include_once 'app/views/layouts/main.php';
	}
}

 ?>