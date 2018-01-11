<?php 
$users = [
	['username' => 'tucq', 'password' => md5('123456'), 'name' => 'Cao Quang Tu'],
	['username' => 'duongnb', 'password' => md5('654321'), 'name' => 'Nguyen Bach Duong']
];

$username = $_POST['username'];
$password = $_POST['password'];
$success = false;
$loginUser = [];
foreach ($users as $value) {
	if($value['username'] == $username
		&& $value['password'] == md5($password)){
		$success = true;
		$loginUser = $value;
		break;
	}
}

if($success){
	echo "Dang nhap thanh cong, Xin chao ". $loginUser['name'];
}else{
	echo "Sai mat khau hoac tai khoan";
}



 ?>