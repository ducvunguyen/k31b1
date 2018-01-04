<?php 
require 'library.php';
/*# tạo 1 hàm giúp chúng ta có 1 mảng là số random từ 1-1000
# có x phần tử
$arr = randomArray(100);
// var_dump($arr);

$arr = addOdd(20);
var_dump($arr);

# tạo 1 hàm lấy ra $x số random chia hết cho số $y trong khoảng từ 1-1000
$arr = minusForNumber($y, $x);
*/

$arr = [];
for ($i=0; $i < 10; $i++) { 
	$arr[] =  rand(1, 20);
}
var_dump($arr);
// tìm tổ hợp 2 số có tổng lớn nhất


 ?>