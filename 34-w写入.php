<?php
// w如果文件不存在，则会创建；
// 如果文件存在，会将文件内容截断为0，接着在开始写入
$filename ='./static/1.txt';
$handle = fopen($filename,'w');
// 向文件中写入，   .PHP_EOL是换行
fputs($handle,'this is a test'.PHP_EOL);
fputs($handle,'hello world');
fclose($handle);
