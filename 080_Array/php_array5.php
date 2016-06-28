<?php
header("content-type: text/html; charset=utf-8");

$season = array('春', '夏', '秋', '冬'); 

echo "每年的四季分別為：";
foreach ($season as $value){ //讓每個陣列的值傳入$value裡
	echo $value;
}

?>