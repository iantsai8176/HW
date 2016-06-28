<?php
$sData = "908872526535442041985072568716";
$result = "01234567890";
$iLen = strlen($sData);//字串長度
for ($iPos = 0; $iPos < $iLen; $iPos++)
{
	$ch = substr($sData, $iPos, 1);///取字串部分內容

	$result = $ch . str_replace($ch, "", $result);//將$result的$ch值改成空值
		echo "$result<br>";

}

echo substr($result, 0, 5) . "-" . substr($result, 5, 5);
?>