<?php
  $x = 3;
  if ($x >= 10 && foo()) //&&嚴格判斷，若左邊不成立，右邊不做判斷
    echo "yes";
  else
    echo "no";
    
  echo "<hr>"; //水平線

  $x = 3;
  if ($x >= 10 & foo()) //簡易判斷，兩邊皆會做判斷
    echo "yes";
  else
    echo "no";
    
function foo()
{
   echo "foo() is running.<br>";
}

?>