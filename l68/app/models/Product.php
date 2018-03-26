<?php 
require_once 'app/models/database.php';
class Product extends database{
	
	const TABLE_NAME = 'products';

	function getProductList($cateId){
		$sql = "select 
					p.*,
					c.name as category_name
				from products p
				join categories c
				on p.category_id = c.id
				where p.category_id = $cateId";
		$this->setQuery($sql);
		$this->execute();
		return $this->loadAllRows();
	}
}
 ?>
