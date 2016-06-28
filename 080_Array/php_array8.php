<?php
	$testArray = array("A1", "A2", "A18");
	sort($testArray);//對字母進程由低至高排序
	var_dump($testArray);
	
	echo "<br />";
	
	natsort($testArray);//自然排序
	var_dump($testArray);
?>
