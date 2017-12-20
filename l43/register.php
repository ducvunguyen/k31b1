<?php 
$usrMsg = isset($_GET['usr']) == true ? $_GET['usr'] : null;
$pwdMsg = isset($_GET['pwd']) == true ? $_GET['pwd'] : null;


 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="register_submit.php" method="post">
		<div>
			<!-- bat buoc phai co du lieu -->
			<!-- so luong ky tu khong vuot qua 20 -->
			<label for="">User name:</label>
			<input type="text" name="username" value="" placeholder="Username">
			<br>
			<span style="color: red"><?php echo $usrMsg; ?></span>
		</div>
		<div>
			<!-- bat buoc phai co du lieu -->
			<!-- so luong ky tu tu 8-10 -->
			<label for="">Password:</label>
			<input type="password" name="password" value="" placeholder="Password">
			<br>
			<span style="color: red"><?php echo $pwdMsg; ?></span>

		</div>
		<div>
			<button type="submit">Submit</button>
		</div>
	</form>
</body>
</html>