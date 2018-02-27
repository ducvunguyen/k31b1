<h3>Hướng đối tượng</h3>
<?php 

// require_once 'models/Product.php';
// $but = new Product();
// $but->type = 'but bi';
// var_dump($but);die;

class Animal{
	var $name;
	var $age;
	var $movingTimes = 0;
	function moving(){
		$this->movingTimes++;
		echo "toi la " . $this->name . " - toi dang di chuyen (".$this->movingTimes." lan) <br>";
	}

}

$huy = new Animal();
$huy->name = 'Doan Quang Huy';
$huy->moving();

$van = new Animal();
$van->name = 'Nguyen Anh Van';
$van->moving();

$huy->moving();
$huy->moving();
$huy->moving();
$huy->moving();





/*
class ConNguoi{
	var $ten;
	var $ngaySinh;
	var $queQuan;
	var $gioiTinh;
	var $cmnd;
}*/

/*$huy = new ConNguoi();
$huy->ten = 'Doan Du';
$huy->ngaySinh = '01/01/2001';
$huy->queQuan = 'bac giang';
$huy->gioiTinh = 'nam';
$huy->cmnd = '111111112';



$pig = new Animal();
$pig->name = 'heo';
$pig->age = 2;

$bird = new Animal();
$bird->name = 'Vang anh';
$bird->age = 4;*/

// var_dump( $huy,$pig, $bird);


 ?>