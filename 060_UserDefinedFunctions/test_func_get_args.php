<?php

echo calcTotal(1, 2, 3, 4, 5);

function calcTotal () {
	$args = func_get_args();//回傳陣列每項參數
	// var_dump($args);//印出字串變數或陣列變數其他資訊
	$total = 0;
	foreach ($args as $value) {//將陣列依序每項傳入value
		$total += $value;
	}
	return $total;
}


?>
