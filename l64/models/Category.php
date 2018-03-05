<?php 
class Category{
	var $host = '127.0.0.1';
	var $dbname = 'k31b1';
	var $dbusername = 'root';
	var $dbpwd = '123456';

	var $table = 'categories';

	function uppercaseName(){
		return strtoupper($this->name);
	}

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
		$result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($this)); // ép kiểu các phần tử là kết quả của câu lệnh select sang thành kiểu dữ liệu Category
		// var_dump($result);die;
		return $result;// ket qua cua cau lenh sql
	}

	// insert data vao trong table
	function insert(){
		$sql = "insert into " . $this->table;
		$sql .= " (name, description) ";
		$sql .= " values ";
		$sql .= " ('$this->name', '$this->description') ";

		$stmt = $this->connect->prepare($sql);

		$stmt->execute();
	}

	// update data vao trong table
	function update(){
		$sql = "update $this->table 
				set name = '$this->name',
					description = '$this->description'
				where id = $this->id";
		$stmt = $this->connect->prepare($sql);

		$stmt->execute();
	}

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
		$result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($this));
		if(count($result) > 0) return $result[0];
		
		return null;
	}
}
 ?>
