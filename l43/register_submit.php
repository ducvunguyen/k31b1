<?php  
$username = $_POST['username'];
$password = $_POST['password'];
$userErrMsg = null;
if($username == ""){
	$userErrMsg = "Vui lòng nhập user name";
}

if($userErrMsg == null && strlen($username) > 20){
	$userErrMsg = "User name không vượt quá 20 ký tự";
}

$pwdErrMsg = null;
if($password == ""){
	$pwdErrMsg = "Vui lòng nhập password";
}

if($pwdErrMsg == null && (strlen($password) < 8 || strlen($password) > 10)){
	$pwdErrMsg = "Password nằm trong khoảng từ 8 - 10 ký tự";
}

if($userErrMsg != null || $pwdErrMsg != null){
	header("location: register.php?usr=$userErrMsg&pwd=$pwdErrMsg");
	die;
}else{
	echo "Hello Mr.$username,<br>Chúc mừng bạn đăng ký thành công!";
}



?>
