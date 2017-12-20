<?php  
$username = $_POST['username'];
if($username !== ""){
	header('location: index.php');
}else{
	header('location: register.php?usr=vui long dien ten tai khoan');
}





?>
