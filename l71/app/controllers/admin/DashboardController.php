<?php 
require_once $hint.'app/models/Category.php';
require_once $hint.'app/models/Product.php';
require_once $hint.'app/controllers/admin/BaseController.php';
class DashboardController extends BaseController{
	function index(){

		// Lay tong so danh muc
		$cateModel = new Category();
		$totalCate = count($cateModel->getCateList());

		// Lay tong so san pham
		$proModel = new Product();
		$totalPro = count($proModel->getTotalProduct());

		$hint = "../";
		$view = $hint.'app/views/admin/dashboard.php';
		$title = "Dashboard";
		include_once $hint.'app/views/layouts/admin.php';
	}
}

 ?>