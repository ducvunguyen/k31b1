<?php 
require 'library.php';

$str = "";
for ($i=0; $i < 20; $i++) { 
	$str .= generateRandomCharacter();
}
echo $str;


 ?>