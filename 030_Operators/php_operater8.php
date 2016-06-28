<?php
  
    echo "flag 1<br>";
    @require("MyLibrary.php");//出錯不執行，程式立即中止
    echo "flag 2<br>";

?>