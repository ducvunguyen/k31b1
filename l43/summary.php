<?php 
$ip = $_SERVER['REMOTE_ADDR'];
if($ip == '192.168.1.31'){
	die;
}
$a = $_POST['soA'];
$b = $_POST['soB'];
$c = $_POST['soC'];
$total = $a+$b+$c;
echo "tong cua $a+$b+$c = $total <br>";

if($a+$b>$c && $a+$c>$b && $b+$c>$a){
	$p = $total/2;
	$s = sqrt($p*($p-$a)*($p-$b)*($p-$c));
	echo "Chu vi Tam giac  = $total <br> Dien tich tam giac = $s";
}else{
	echo "Khong hinh thanh tam giac";
}

 ?>