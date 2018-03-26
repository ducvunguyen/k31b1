<?php 
session_start();
$hint = "";
require_once 'app/models/Product.php';
$model = new Product();
$product = $model->getProductById($_GET['pId']);
if($product){
	$array_product = [
				'id' => $product->id,
				'name' => $product->name,
				'feature_image' => $product->feature_image,
				'price' => $product->sell_price,
				'quantity' => 1
			];

	// chưa tồn tại giỏ hàng => tạo ra giỏ hàng và thêm sản phẩm đầu tiên vào
	if(!isset($_SESSION['cart'])){
		$_SESSION['cart'] = [
			$array_product
		];
	}else{
		$cartData = $_SESSION['cart'];
		$check = -1;
		// kiem tra san pham co trong gio hang hay khong
		// neu check = false thi khong co
		// neu check != false => check = so thu tu cua san pham trong gio hang
		for ($i=0; $i < count($cartData); $i++) { 
			if($product->id == $cartData[$i]['id']){
				$check = $i;
				break;
			}
		}
		// trường hợp sản phẩm chưa có trong giỏ hàng
		if($check == -1){
			array_push($cartData, $array_product);
		}else{
			// san pham da co trong gio hang
			$cartData[$check]['quantity']++;
		}

		$_SESSION['cart'] = $cartData;
	}
}
header('location: index.php');

 ?>