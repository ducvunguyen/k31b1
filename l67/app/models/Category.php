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

}
 ?>
