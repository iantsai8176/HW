<?php
	header("content-type: text/html; charset=utf-8");

	$contents = file_get_contents('data.txt');//取得字串檔案
	echo (str_replace("\r\n", "<br />", $contents));
?>