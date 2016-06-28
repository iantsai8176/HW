<?php

$a = array(0.1 => 'A',
            0.9 => 'B', 
            '1.1' => 'C');
//PHP會將鍵值的數值轉為整數

var_dump($a);//列出相關資訊
foreach ($a as $k => $s)
{
	 echo "$k = $s<br>";
}
?>
