<?php 
require_once 'models/Category.php';
$cateModel = new Category();
$cateList = $cateModel->getAll();
 ?>
<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Tên</th>
			<th>Mô tả</th>
			<th>
				<a href="create.php" title="">Add</a>
			</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($cateList as $key => $value): ?>
			<tr>
				<td><?= $value->id ?></td>
				<td>
					<a href="detail.php?id=<?= $value->id ?>">
						<?= $value->uppercaseName() ?>
					</a>
				</td>
				<td><?php echo $value->description ?></td>
				<td>
					<a href="update.php?id=<?= $value->id ?>">
						Update
					</a>
					<a href="remove.php?id=<?= $value->id ?>">
						Remove
					</a>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>