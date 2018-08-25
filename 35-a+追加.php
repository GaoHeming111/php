<?php
//向文件末尾追加
$filename ='./static/1.txt';
$handle = fopen($filename,'a+');
// 截断文件前四位，后面的全不要了
ftruncate($handle,4);
// 判断指针是否到文件尾部，如果到尾部则返回true;
feof($handle);
// 一个字符一个字符的读取
fgetc($handle);
// 一行一行读取
fgets($handle);
// 一行一行读取，并且过滤掉html标记
strip_tags(fgets($handle));
fwrite($handle,'hello world');
// 重置指针到开始位置
rewind($handle);
fread($handle,filesize($filename));
fclose($handle);
