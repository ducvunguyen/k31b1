<?php 
$content = file_get_contents("data.txt");
$arr = explode('|end', $content);
?>
<table>
<?php
for ($i=0; $i < count($arr); $i++) { 
	if($arr[$i] == "") continue;	
	$object = explode('|', $arr[$i]);
	echo "<tr>

		<td>".$object[0]."</td>
		<td>".$object[1]."</td>
		<td>".$object[2]."</td>
		<td>".$object[3]."</td>

	</tr>";
}

 ?>
 </table>