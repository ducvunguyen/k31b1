<?php 
session_start();
$hint = '../';
require_once $hint . 'app/controllers/admin/DashboardController.php';
if(!isset($_SESSION['auth']) || $_SESSION['auth'] == null){
	if($_SESSION['auth']['role'] < 2){
		header('location: ../index.php');
	}
	header('location: ../login.php');
}

$ctr = new DashboardController();
$ctr->index();
 ?>

