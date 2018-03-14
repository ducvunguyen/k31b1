<?php 
session_start();
class BaseController{
	function __construct(){
		if(!isset($_SESSION['auth']) || $_SESSION['auth'] == null){
			if($_SESSION['auth']['role'] < 2){
				header('location: ../index.php');
			}
			header('location: ../login.php');
		}
	}
}

 ?>