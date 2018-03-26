<?php 
// hàm
// function logErr(){

// 	echo "ahihi lỗi rồi!";

// }

// function backduong(){
// 	echo 'my name is Duong';
// }
// backduong();
// logErr();

// function findingMaximum($a, $b, $c){
// 	$max = $a;
// 	if($max<=$b){$max = $b;}
// 	if($max<=$c){$max = $c;}

// 	echo "Số lớn nhất trong 3 số ($a, $b, $c) là $max<br>";
// }

// findingMaximum(rand(1, 100), rand(1, 100), rand(1, 100));
// findingMaximum(1, 5, -2);
$arr = [];
for ($i=0; $i < 100; $i++) { 
	$arr[] = rand(1, 100);
}
var_dump($arr);
function checkDuplicate($x){
	for ($i=0; $i < count($x); $i++) { 
		$count = 0;
		for ($j=0; $j < count($x); $j++) { 
			if($x[$i] == $x[$j]) $count++;
		}
		if($count>1)
			echo "phần tử $x[$i] bị trùng $count lần <br>";
	}
}

checkDuplicate($arr);

 ?>