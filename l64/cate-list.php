<?php 
require_once 'models/Category.php';
$cateModel = new Category();

$cateModel->name = 'nguyen thanh cuong';
$cateModel->description = 'cuong thi';
$cateModel->insert();
// danh sach danh muc
$cateList = $cateModel->getAll();
 ?>

<table>
	<thead>
		<tr>
			<th>header</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>data</td>
		</tr>
	</tbody>
</table>