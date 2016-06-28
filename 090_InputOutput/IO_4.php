<?php
header("content-type: text/html; charset=utf-8");

$lines = file ( 'data.txt' );//傳入入檔名，帶入陣列
foreach ( $lines as $line_num => $line ) {
	echo "#<i>$line_num</i> : " . 
		 htmlspecialchars ( $line ) . "<br />\n";//將字符轉成HTML
}

?> 