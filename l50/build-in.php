<?php 
require 'library.php';
// $now = date('M d,Y'); // format - dinh dang
// var_dump($now);
// // 2017-12-07


// echo formatDateByLocate('2017-12-07', US_DATE_FORMAT);
$arr = randomArray(10);
// var_dump(each($arr));

// var_dump($arr);
// var_dump(end($arr)); // lay ra phan tu cuoi cung
// var_dump($arr);

// $name = 'hoang kim toi';
// $age = 20;
// $className = 'k31b1';

// $result = compact('name', 'age', 'className');
// var_dump($result);
// $exam = ['name' => 'phan nguyen thanh', 'age' => 20];
// extract($exam);
// echo $name . ' -- ' . $age;
// var_dump(in_array(100, $exam));
// $pathDir = "h'o'me";
// echo addslashes($pathDir);
// echo addcslashes($pathDir, $pathDir[0]);
// $pwd = '123456';
// $pwd2 = '123456789';
// echo crypt($pwd, 'thienth dep trai') . '<br>';
// echo crypt($pwd, 'cao quang tu');
// echo md5($pwd) . '<br>';
// echo sha1($pwd). '<br>';

// $hashed = password_hash($pwd, PASSWORD_DEFAULT);
// echo $hashed. '<br>';
// var_dump(password_verify('123', $hashed));
// $arr = ['dinh', 'cong', 'can'];
// $str = implode(" ", $arr);
// echo $str.'<br>';

// $nam = 'nguyen son nam dep trai, hoc dot';
// $arr = explode(" ", $nam);
// var_dump($arr);
// $htmlText = '<div>
// 	<h2>Son idol</h2>
// 	<p>que quan: 4 vi</p>
// 	<p>ngay sinh: 15/2/1999</p>
// </div>
// <script>alert(123);</script>';
// $new = htmlspecialchars("<script>alert(123)</script>");
// echo $new; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;
// $hash = htmlentities($htmlText);
// echo html_entity_decode($hash);

// $arr1 = randomArray(20);
// $arr2 = randomArray(20);
// var_dump($arr1);
// var_dump($arr2);
// $result = array_intersect($arr1, $arr2);
// var_dump($result);

$arr = ['name' => 'hoang kim toi', 'age' => 20];
var_dump(array_key_exists('age', $arr));














 ?>