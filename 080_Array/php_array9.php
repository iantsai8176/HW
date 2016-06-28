<?php
function cmp($a, $b)
{
    echo "$a,$b<br>";
    if ($a == $b) {
        return 0;
    }
    //echo "$b,$a<br>";
    return ($a < $b) ? -1 : 1;
}

$a = array(3, 2, 5, 6, 1);
usort($a, "cmp");//使用自定義函數去排序
// foreach ($a as $key => $value) {
//     echo "$key: $value <br />";
// }

?>