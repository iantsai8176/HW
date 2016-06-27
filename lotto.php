<?php
    $number = array();
    for($i = 1;$i <= 10 ;$i++){
        $number[$i] = rand(1,49);
        for($j = 1;$j <=$i;$j++){
        if($number[$j] == $number[$j+1])
            $number[$i] = rand(1,49);
        }
         echo "$number[$i]<br>";
         
    }

?>