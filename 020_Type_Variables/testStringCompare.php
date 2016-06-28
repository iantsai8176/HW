<?php
//字串型別是從第一個依序相比
$x = "ABC";
$y = "AB";
if ($x >= $y)
	echo "$x >= $y";
else
	echo "$x < $y";

echo "<hr>";


$x = "ABC";
$y = "BA";
if ($x >= $y)
	echo "$x >= $y";
else
	echo "$x < $y";

echo "<hr>";

//字串型別的數值，php將自動轉數值型別
$x = "123";
$y = "12";
if ($x >= $y)
	echo "$x >= $y";
else
	echo "$x < $y";

echo "<hr>";

$x = "123";
$y = "21";
if ($x >= $y)
	echo "$x >= $y";
else
	echo "$x < $y";

echo "<hr>";
		
		
?>