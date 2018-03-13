<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $title ?></title>
	<link rel="stylesheet" href="">
</head>
<body>
	
	<form action="" method="post">
		<?php 
			if(isset($msg)){
				?>
			<h4 style="color: red"><?= $msg?></h4>
				<?php
			}
		 ?>
		<div>
			<label for="">Email</label>
		    <input type="text" name="email" placeholder="Email">
		</div>
		<div>
			<label for="">Password</label>
		    <input type="password" name="password" placeholder="Password">
		</div>
		<div>
			<button type="submit">Login</button>
		</div>
	</form>
</body>
</html>