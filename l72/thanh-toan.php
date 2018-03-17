<?php 
session_start();

if(!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0){
	header('location: index.php');
}

 ?>
 <table>
 	<thead>
 		<tr>
 			<th>Tên sản phẩm</th>
 			<th>Ảnh</th>
 			<th>Đơn giá</th>
 			<th>Số lượng</th>
 			<th>Thành tiền</th>
 			<th></th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php 
 		$totalMoney = 0;
 		 ?>
 		<?php foreach ($_SESSION['cart'] as $item): ?>

 			<?php $totalMoney += $item['quantity']*$item['price']; ?>
 			<tr>
	 			<td><?= $item['name']?></td>
	 			<td>
	 				<img src="<?= $item['feature_image']?>" width="70">
	 			</td>
	 			<td><?= $item['price']?></td>
	 			<td>
	 				<input type="number" id="item-<?=$item['id']?>" value="<?= $item['quantity']?>">
	 			</td>
	 			<td><?= $item['quantity']*$item['price']?></td>
	 			<td>
	 				<button onclick="changeQuantity(<?=$item['id']?>)" type="button">Cập nhật</button>
	 				<a href="remove-item-from-cart.php?id=<?=$item['id']?>">Xoá sản phẩm</a>

	 			</td>
	 		</tr>
 		<?php endforeach ?>
 		<tr>
 			<td colspan="4">Tổng số tiền cần thanh toán</td>
 			<td colspan="2"><?=$totalMoney?></td>
 		</tr>
 		
 	</tbody>
 </table>

 <script>
 	function changeQuantity(itemId){
 		var quantityChangeNumber = document.querySelector(`#item-${itemId}`).value;
 		window.location.href = `update-cart-item.php?itemId=${itemId}&quantity=${quantityChangeNumber}`;
 	}
 </script>