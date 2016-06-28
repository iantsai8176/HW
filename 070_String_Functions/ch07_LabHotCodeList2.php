<?php
$f = fopen("pick3.txt", "r");//開啟pick3.txt為可讀黨
while (!feof($f)) //檢查是否已到文件末尾
{
	$line = fgets($f);//取得文件內容
	echo "$line<br>";
}
fclose($f);//關閉文件
echo "--End--";
?>