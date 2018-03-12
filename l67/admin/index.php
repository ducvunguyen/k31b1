<?php 
session_start();
if(!isset($_SESSION['auth']) || $_SESSION['auth'] == null){
	header('location: ../login.php');
}


 ?>

 <h2>Hello, Mr.<?= $_SESSION['auth']['name']?></h2>