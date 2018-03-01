<?php 
class Category{
	var $host = '127.0.0.1';
	var $dbname = 'k31b1';
	var $dbusername = 'root';
	var $dbpwd = '123456';

	var $table = 'categories';

	// Ham khoi tao
	// chay ngay lap tuc tai thoi diem new Object()
	function __construct(){

		$this->connect = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname.";charset=utf8;", $this->dbusername, $this->dbpwd);
	}

	// Hien thi danh sach danh muc trong db
	function getAll(){
		$query = "select * from ". $this->table;
		$stmt = $this->connect->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		// var_dump($result);die;
		return $result;// ket qua cua cau lenh sql
	}

	// insert data vao trong table
	function insert(){
		$sql = "insert into " . $this->table;
		$sql .= " (name, description) ";
		$sql .= " values ";
		$sql .= " (:name, :description) ";

		$stmt = $this->connect->prepare($sql);

		$stmt->bindValue(":name", $this->name);
		$stmt->bindValue(":description", $this->description);

		$stmt->execute();
	}

	// update data vao trong table
	function update(){}

	// xoa data dua vao id
	function delete($id){
		$query = "delete from ". $this->table . " where id = $id";
		$stmt = $this->connect->prepare($query);
		$stmt->execute();
	}

	// lay ra 1 ban ghi dua vao id
	function findOne($id){
		$query = "select * from ". $this->table . " where id = $id";
		$stmt = $this->connect->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		// var_dump($result);die;
		return $result;
	}
}
 ?>
