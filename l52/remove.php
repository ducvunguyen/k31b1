<?php 
require_once 'library.php';
$id = $_GET['id'];
$students = getStudents();

for ($i=0; $i < count($students); $i++) { 
	if($students[$i][0] == $id){
		array_splice($students, $i, 1);
		break;
	}
}
saveStudent($students);
header('location: index.php');

 ?>