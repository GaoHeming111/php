<?php
//向文件末尾追加
$filename ='./static/1.txt';
$handle = fopen($filename,'a+');
fwrite($handle,'hello world');
fclose($handle);
