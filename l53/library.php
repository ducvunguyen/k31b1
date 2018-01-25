<?php 
function getStudents(){
	// đọc toàn bộ text từ file
	$data = file_get_contents('data.txt');

	// lọc từng sinh viên dựa vào ký tự |end
	$arr = explode("|end", $data);
	$result = [];
	foreach ($arr as $row) {
		if(empty(trim($row))) continue;
		// lọc các thuộc tính của 1 sinh viên dựa vào ký tự "|"
		$student = explode("|", $row);
		$result[] = $student;
	}

	return $result;
}

function saveStudent($students){
	// lưu nội dung mới vào file
	$content = "";
	foreach ($students as $row) {
		$content .= $row[0]."|".$row[1]."|".$row[2]."|".$row[3]."|end";
	}

	$file = fopen('data.txt', "w+");
	if(!$file){
		echo "Không mở được file!";
		return false;
	}else{
		fwrite($file, $content);
		fclose($file);
		return true;
	}
}
 ?>