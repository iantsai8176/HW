<?php

echo "Path and FileName:" . __FILE__ . "<br />";//讀取檔名和路徑
echo "Path: " . dirname ( __FILE__ );//讀取檔名路徑
echo "Filename: " . basename ( __FILE__ ) . "<br />";// 檔取檔名
echo "Filesize: " . filesize ( __FILE__ ); //檔案大小
