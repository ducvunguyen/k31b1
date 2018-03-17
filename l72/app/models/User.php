<?php 
require_once 'app/models/database.php';
class User extends database{
	
	function getUserByEmail($email){
		$sql = "select * from users where email = '$email'";
		$this->setQuery($sql);
		$this->execute();
		return $this->loadRow();
	}
}

 ?>