<?php 
require_once $hint.'app/models/Category.php';
class DashboardController{
	function index(){

		$view = $hint.'app/views/admin/dashboard.php';
		$title = "Dashboard";
		include_once $hint.'app/views/layouts/admin.php';
	}
}

 ?>