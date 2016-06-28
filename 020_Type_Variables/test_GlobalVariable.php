<?php
$a = 20;
function myfunction($b) {
	print "a=$a<br>";
	$a = 30;
	echo "$a<br>";
	print "a=$a<br>";
	global $a, $c;//改為使用全域變數
	print "a=$a<br>";
	echo "$c<br>";
	echo "$b<br>";
	
	return $c = ($b + $a);//60
	
	
	
}
	

print myfunction(40) + $c;//120
?>