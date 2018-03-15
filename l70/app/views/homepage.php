<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Tên danh mục</th>
			<th>Mô tả</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data as $cate): ?>
			<tr>
			    <td><?= $cate->id?></td>
			    <td>
			    	<a href="product-list.php?cateid=<?=$cate->id?>" title="">
			    		<?= $cate->name?>
			    	</a>
			    </td>
			    <td><?= $cate->description?></td>
		    </tr>
		<?php endforeach ?>
		
	</tbody>
</table>