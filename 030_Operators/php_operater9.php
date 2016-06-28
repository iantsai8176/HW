<?php

$x = 100;
$y = &$x;//指向X記憶體  ,&指標

$y = 200;
echo "x = $x </br>"; //200

unset($x); //將VALUE清除
echo "y = $y </br>";

?>