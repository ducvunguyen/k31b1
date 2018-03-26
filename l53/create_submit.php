<?php 
require_once 'library.php';
$fullname = $_POST['fullname'];
$hometown = $_POST['hometown'];
$birthDate = $_POST['birthdate'];

// biến đổi format từ năm-tháng-ngày => ngày/tháng/năm
$date = date_create($birthDate);
$birthDate = date_format($date, 'd/m/Y');

$students = getStudents();
// tính số id lớn nhất
if(count($students) == 0) $maxId = 1;
else
	$maxId = $students[count($students)-1][0]+1;
	

$students[$id][1] = [$maxId, $fullname, $hometown, $birthDate];

saveStudent($students);

header('location: index.php');

 ?>