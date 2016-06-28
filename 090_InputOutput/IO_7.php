<?php
header("content-type: text/html; charset=utf-8");
 
$sData = "";
$f = fopen("data.txt", "r");
while (!feof($f))//檢查文件有無道文末
{
	$line = fgets($f);//讀取一行檔案
	$sData .= Trim($line) . "<br>";
}
fclose($f);
echo $sData;

?>
