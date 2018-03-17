
<div style="clear: both; display: table;">
	
<?php foreach ($listProduct as $p): ?>
	<div style="float: left;width: 33.3333%; border: 1px solid green; padding: 10px;">
		<h2><?= $p->name?></h2>
		<img src="<?=$p->feature_image?>" style="width: 100%;">
		<p><b>Gía: </b><?=$p->list_price?></p>
		<p><b>Giá bán: </b><?=$p->sell_price?></p>
		<div>
			<a href="add-to-cart.php?pId=<?=$p->id?>" title="">Thêm sản phẩm giỏ hàng</a>
		</div>
	</div>
<?php endforeach ?>
</div>