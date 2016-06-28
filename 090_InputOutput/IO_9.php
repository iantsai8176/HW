<?php
header("Content-Type: image/png");

$filename = "cc.png";
$fileHandle = fopen($filename, "rb");
echo fread($fileHandle, filesize($filename));//讀取檔案，filesize回傳指定文件大小
fclose($filename);

?>