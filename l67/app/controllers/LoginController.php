<?php 
session_start();
require_once 'app/models/User.php';
class LoginController{
	function getLogin(){
		$title = "Đăng nhập";
		include_once 'app/views/auth/login.php';
	} 

	function postLogin(){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$model = new User();
		$user = $model->getUserByEmail($email);
		if($user && password_verify($password, $user->password)){
			$_SESSION['auth']['id'] = $user->id;
			$_SESSION['auth']['name'] = $user->name;
			$_SESSION['auth']['email'] = $user->email;
			$_SESSION['auth']['role'] = $user->role;
			header('location: admin/index.php');
		}

		$title = "Đăng nhập";
		$msg = "Sai mật khẩu/tài khoản";
		include_once 'app/views/auth/login.php';

	}

}
 ?>
