<?php 

$file = $_FILES['avatar'];

// $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
// var_dump($ext);die;

move_uploaded_file($file["tmp_name"], "uploads/". uniqid(). "-" .$file['name']);


// $dirFile = 'uploads/'.$_FILES['avatar']['name'];
// if(file_exists($dirFile)){
// 	echo 'file ton tai';
// }else{
// 	echo 'file khong ton tai';
// }



 ?>