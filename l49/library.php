<?php 

define('US_DATE_FORMAT', 'us');
define('VN_DATE_FORMAT', 'vn');
define('EURO_DATE_FORMAT', 'eu');

// hàm 
# tập hợp các câu lệnh được đặt tên 
# có thể có thêm các tham số
# có thể return hoặc không
function tinhTong($soA, $soB){
	return $soA+$soB;
}

function randomArray($x){
	$result = [];

	for ($i=0; $i < $x; $i++) { 

		// them phan tu vao trong mang
		// moi phan tu la 1 so random trong khoan 1-1000
		$result[] = rand(1, 1000);
	}

	return $result;
}

# tạo hàm arrOdd($x) tạo ra 1 mảng chứa toàn số chẵn 
# mảng này có $x phần tử
function addOdd($x){
	$result = [];
	while(count($result) < $x){
		$number = rand(1, 1000);
		if($number%2==0){
			$result[] = $number;
		}
	}
	return $result;
}
#Sinh ra 1 ký tự hoa hoặc thường bất kỳ
function generateRandomCharacter(){
	$upperLower = rand(1, 2);
	if($upperLower == 1){
		return chr(rand(97, 122));
	}else{
		return chr(rand(65, 90));
	}
}

// vn - viet nam
// eu - europe
// us - america
function formatDateByLocate($ipdate, $locate = VN_DATE_FORMAT){
	$date = date_create($ipdate);
	switch ($locate) {
		case VN_DATE_FORMAT:
			return date_format($date, 'd/m/Y');
			break;
		case EURO_DATE_FORMAT:
			return date_format($date, 'Y-M-d');
		default:
			return date_format($date, 'M d, Y');
			break;
	}
}


 ?>