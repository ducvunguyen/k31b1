<?php 
$content = file_get_contents("data.txt");
$content .= $_GET['id'] . "|" . $_GET['ten'] . "|" . $_GET['que'] . "|" . $_GET['nghe'] . "|end";
$datafile = fopen("data.txt", "w") or die("Unable to open file!");
fwrite($datafile, $content);
fclose($datafile);
header('location: read.php');

 ?>