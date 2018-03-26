<?php 
require_once 'library.php';
$students = getStudents();

 ?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>Mã sv</th>
				<th>Tên sv</th>
				<th>Quên quán</th>
				<th>Ngày sinh</th>
				<th>
					<a href="create.php" title="">Thêm mới</a>
				</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($students as $st): ?>
				<tr>
					<td><?php echo $st[0] ?></td>
					<td><?php echo $st[1] ?></td>
					<td><?php echo $st[2] ?></td>
					<td><?php echo $st[3] ?></td>
					<td>
						<a href="" title="">Cập nhật</a>
						<a href="remove.php?id=<?= $st[0]?>" title="">Xoá</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</body>
</html>