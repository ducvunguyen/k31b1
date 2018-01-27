<?php 
// tao ket noi den db
$host = '127.0.0.1';
$dbname = 'northwind';
$dbUsername = 'root';
$dbpwd = '123456';

try{
	$connect = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $dbUsername, $dbpwd);

}catch(Exception $ex){
	die($ex->getMessage());
}



 ?>