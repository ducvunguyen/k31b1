<?php 
require_once $hint.'app/models/Category.php';
class DashboardController{
	function index(){
		$hint = "../";
		$view = $hint.'app/views/admin/dashboard.php';
		$title = "Dashboard";
		include_once $hint.'app/views/layouts/admin.php';
	}
}

 ?>