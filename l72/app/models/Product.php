<?php 
require_once $hint.'app/models/database.php';
class Product extends database{
	
	const TABLE_NAME = 'products';

	function getProductListByCateId($cateId){
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

	function getTotalProduct(){
		$sql = "select 
					p.*,
					c.name as category_name
				from products p
				join categories c
				on p.cate_id = c.id
				";
		$this->setQuery($sql);
		$this->execute();
		return $this->loadAllRows();
	}

	function getProductById($id){
		$sql = "select 
					*
				from products 
				where id = $id";
		$this->setQuery($sql);
		$this->execute();
		return $this->loadRow();
	}
}
 ?>
