<?php 
require_once 'app/models/Product.php';
class ProductController{
	function index(){
		$id = $_GET['cateid'];
		$model = new Product();
		$data = $model->getProductList($id);

		$title = "Danh sách sản phẩm";
		$view = "app/views/products/list.php";
		include_once 'app/views/layouts/main.php';
	}
}

 ?>