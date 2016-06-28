<?php
  
  //office lens
  $x = getdate();//取得標準時間陣列
  echo gettype($x), "<br>"; //取得$x型別
  
  $x = date('Y-m-d H:i:s');//取標準時間
  echo $x, "<br>";
  echo gettype($x), "<br>";
  
  $x = gmdate('Y-m-d H:i:s');//格林威至標準时間
  echo $x, "<br>";
  
  $x = strtotime(gmdate('Y-m-d H:i:s'));//將英文日期時間轉為時間戳
  echo $x, "<br>";
  echo gettype($x), "<br>";
  
?>