<?php 
class Category{
	var $host = '127.0.0.1';
	var $dbname = 'lesson62';
	var $dbusername = 'root';
	var $dbpwd = '123456';

	var $connect = new PDO("mysql:host".$this->host.";dbname=".$this->dbname.";charset=utf8;", $this->dbusername, $this->dbpwd);

	var $table = 'categories';

	// Hien thi danh sach danh muc trong db
	function getAll(){
		
		$query = "select * from ". $this->table;
		$stmt = $this->connect->prepare($query);
		$stmt->execute();
		$resutl = $stmt->fetchAll();
		var_dump($result);die;
		return $result;// ket qua cua cau lenh sql
	}

	// insert data vao trong table
	function insert(){}

	// update data vao trong table
	function update(){}

	// xoa data dua vao id
	function delete($id){}

	// lay ra 1 ban ghi dua vao id
	function findOne($id){
		$query = "select * from ". $this->table . " where id = $id";
	}
}
 ?>
