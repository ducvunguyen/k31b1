<?php 

class BaseModel{
	var $host = '127.0.0.1';
	var $dbname = 'k31b1';
	var $dbusername = 'root';
	var $dbpwd = '123456';

	// Ham khoi tao
	// chay ngay lap tuc tai thoi diem new Object()
	function __construct(){

		$this->connect = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname.";charset=utf8;", $this->dbusername, $this->dbpwd);
	}

	// Hien thi danh sach danh muc trong db
	static function getAll(){
		$model = new static();
		
		$query = "select * from ". static::TABLE_NAME;
		$stmt = $model->connect->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model)); // ép kiểu các phần tử là kết quả của câu lệnh select sang thành kiểu dữ liệu Category
		// var_dump($result);die;
		return $result;// ket qua cua cau lenh sql
	}
}
 ?>
