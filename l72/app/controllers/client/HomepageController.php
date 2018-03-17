<?php 
session_start();
require_once $hint."app/models/Category.php";
require_once $hint."app/models/Product.php";
class HomepageController{
	function index(){
		$cateModel = new Category();
		$listCate = $cateModel->getCateList();
		
		$productModel = new Product();
		$listProduct = $productModel->getTotalProduct();

		$title = 'Trang chủ';
		$view = 'app/views/client/home/homepage.php';
		include_once 'app/views/layouts/main.php';
	}
}

 ?>