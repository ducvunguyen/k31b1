<?php 
require_once $hint.'app/models/database.php';
class Category extends database{
	
	const TABLE_NAME = 'categories';

	function getCateList(){
		$sql = "select * from " . self::TABLE_NAME;

		$this->setQuery($sql);
		$this->execute();
		return $this->loadAllRows();
	}

	function getCategoryByName($name){
		$sql = "select * from " . self::TABLE_NAME . " where name = '$name'";

		$this->setQuery($sql);
		$this->execute();
		return $this->loadAllRows();
	}

	function getCateById($id){
		$sql = "select * from " . self::TABLE_NAME . " where id = '$id'";

		$this->setQuery($sql);
		$this->execute();
		return $this->loadRow();
	}

	function insert(){
		$sql = "insert into " . self::TABLE_NAME
				." (name, parent_id, image, description) "
				." values "
				. " ('$this->name', '$this->parent_id', '$this->image', '$this->description')";

		try{
			$this->setQuery($sql);
			$this->execute();
			return true;
		}catch(Exception $ex){
			echo $ex->getMessage();
			return false;
		}
	}

}
 ?>
