<?php 
$usrMsg = $_GET['usr'];


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
			<label for="">User name:</label>
			<input type="text" name="username" value="" placeholder="Username">
			<span style="color: red"><?php echo $usrMsg; ?></span>
		</div>
		<div>
			<label for="">Password:</label>
			<input type="password" name="password" value="" placeholder="Password">
		</div>
		<div>
			<button type="submit">Submit</button>
		</div>
	</form>
</body>
</html>