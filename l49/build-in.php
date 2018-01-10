<?php 
require 'library.php';
$now = date('M d,Y'); // format - dinh dang
var_dump($now);
// 2017-12-07


echo formatDateByLocate('2017-12-07', US_DATE_FORMAT);
 ?>