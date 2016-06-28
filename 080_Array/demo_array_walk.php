<?php
$result = '';
function glue ($val)
{
	global $result;
	$result .= $val;
}
$array = array ('a', 'b', 'c', 'd');
array_walk ($array, 'glue');//代入函數數組中每個元素
echo $result;
?>