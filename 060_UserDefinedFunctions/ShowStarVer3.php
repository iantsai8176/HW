<?php
function ShowStar($iCount, $sWhat = "*")//自定義參數，預防呼叫程式少一個參數代入
{
	$result = "";
	for ($i = 1; $i <= $iCount; $i++)
	{
		$result .= $sWhat;
	}
	echo $result;
}

$iHowMany = 2;
ShowStar($iHowMany);
?>