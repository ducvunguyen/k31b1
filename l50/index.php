<?php 
require 'library.php';

$str = "";
for ($i=0; $i < 20; $i++) { 
	$str .= generateRandomCharacter();
}
echo $str."<br>";


$lower = "";
$upper = "";
for ($i=0; $i < strlen($str); $i++) { 
	if(ord($str[$i]) > 65 && ord($str[$i]) < 90){
		$upper.=$str[$i];
	}else{
		$lower.=$str[$i];
	}
}
echo "Chuoi chua chu in hoa: $upper <br>";
echo "Chuoi chua chu in thuong: $lower <br>";

 ?>