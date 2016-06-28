<?php
  $d = strtotime("2012-09-10");//顯示秒數
  echo gettype($d), "<br>";//取得型態
   $c = strtotime("2012-09-10 -3 days");//時間戳-3天
   $b = strtotime("2012-09-10 +1 month");//時間戳+一個月
  echo "$d<br>";
  echo "$c<br>";
  echo "$b<br>";
  echo "<br>";
  echo date("Y-m-d", $d);//轉日期格式
?>
