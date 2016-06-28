<?php
   //header("content-type: text/html; charset=utf-8");
  header("content-type: text/html; charset=big5");
  $s = "許功蓋";
  echo strlen($s), ", ";  // 9//在UTF-8下是9bytes
  echo strlen(iconv("UTF-8", "big5", $s));//將字串從UTF-8轉成big5
  echo "<HR>";
  echo iconv("UTF-8", "big5", $s);//big5是6bytes
  echo $s;
?>
