<?php 
$emailErr = null;
$birthDateErr = null;
// kiem tra request dang post thi check data
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$email = isset($_POST['email']) == true ? $_POST['email'] : null;
	$date = isset($_POST['date']) == true ? $_POST['date'] : null;
	$month = isset($_POST['month']) == true ? $_POST['month'] : null;
	$year = isset($_POST['year']) == true ? $_POST['year'] : null;
	
	// kiem tra email
	if($email == "" || $email == null){
		$emailErr = 'Vui lòng nhập email hoặc số điện thoại';
	}

	// kiem tra email dung dinh dang
	$countBigA = 0;
	$bigAIndex = 0;
	$lastDotIndex = 0;
	for ($i=0; $i < strlen($email); $i++) { 
		// kiem tra so luong @
		if($email[$i] == '@'){
			$countBigA++;
			$bigAIndex = $i;
		}

		// lay index cua dau cham cuoi cung
		if($email[$i] == '.'){
			$lastDotIndex = $i;
		}
	}

	// so luong @
	// dau cham phai o phia sau cua @
	if($countBigA > 1 || $countBigA == 0
		|| $lastDotIndex - $bigAIndex <= 1
		|| (strlen($email)-1) - $lastDotIndex == 0 
		|| $bigAIndex == 0){
		$emailErr = 'Sai định dạng email/số điện thoại';
	}
	if($emailErr != null){

		// check so dien thoai
		if(!is_numeric($email)){
			
			$emailErr = 'Sai định dạng email/số điện thoại';
		}else if(strlen($email) < 10 || strlen($email) > 11){
			
			$emailErr = 'Sai định dạng email/số điện thoại';
		}else{
			$emailErr = null;
		}
	}

	if($date == null || $month == null || $year == null){
		$birthDateErr = 'Sai định dạng ngày sinh'; 
	}

	// kiem tra các tháng có 29 ngày
	if($date > 29 && $month == 2){
		$birthDateErr = 'Sai định dạng ngày sinh'; 
	}
	if($date == 29 && $month == 2 && $year%4 != 0){
		$birthDateErr = 'Sai định dạng ngày sinh'; 
	}

	if($date == 30 && (
		$month != 4 || $month != 6 || $month != 9 || $month != 11
	)){
		$birthDateErr = 'Sai định dạng ngày sinh'; 
	}

	if($date == 31 && (
		$month != 1 || $month != 3 || $month != 5 || $month != 7 || $month != 8 || $month != 10 || $month != 12 
	)){
		$birthDateErr = 'Sai định dạng ngày sinh'; 
	}
	
	
}



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
	
	<form action="" method="post">
		<div>
			<label for="">Email hoac so dien thoai</label>
			<input type="text" name="email">
			<span style="color: red"><?= $emailErr ?></span>
		</div>
		<div>
			Ngay <select name="date">

				<option value="">Chon ngay</option>
				<?php 
					for ($i=1; $i <= 31; $i++) { 
						?>
						<option value="<?= $i ?>"><?= $i ?></option>
						<?php
					}
				 ?>
			</select> 
			Thang <select name="month">

				<option value="">Chon thang</option>
				<?php 
					for ($i=1; $i <= 12; $i++) { 
						?>
						<option value="<?= $i ?>"><?= $i ?></option>
						<?php
					}
				 ?>
			</select> 
			Nam <select name="year">

				<option value="">Chon nam</option>
				<?php 
					for ($i=2018; $i >= 1990; $i--) { 
						?>
						<option value="<?= $i ?>"><?= $i ?></option>
						<?php
					}
				 ?>
			</select> 
			<br>
			<span style="color: red"><?= $birthDateErr ?></span>
		</div>
		<div>
			<button type="submit">Luu</button>
		</div>

	</form>
</body>
</html>