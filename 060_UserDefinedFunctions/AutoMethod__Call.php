<?php

$obj = new CTest();//類別物件
$obj->Foo(1, 2, 3, 4);


class CTest {
	
	function __call($MethodName, $Parameters) {
		echo "Name: ", $MethodName, "<br>";
		echo "<pre>" . var_dump($Parameters) ."</pre>";
		echo "<hr>";
	}
	
}


?>
