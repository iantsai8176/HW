<?php
$sData = "";
$f = fopen("pick3.txt", "r");
while (!feof($f))
{
	$line = fgets($f);
	$sData .= Trim($line);//清除字串前後空白
}
fclose($f);
//echo $sData;

// GetHotCodeList
$result = "01234567890";
$iLen = strlen($sData);
for ($iPos = 0; $iPos < $iLen; $iPos++)
{
	$ch = substr($sData, $iPos, 1);//取字串部分內容
	$result = $ch . str_replace($ch, "", $result);//將$result的$ch值改成""

}
echo substr($result, 0, 5) . "-" . substr($result, 5, 5);
?>