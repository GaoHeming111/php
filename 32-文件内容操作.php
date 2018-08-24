<?php
// 打开文件； 读取、写入文件； 关闭文件；
$filename='./static/1.txt';

// 打开文件
$handle = fopen($filename,'r');

// 读取文件内容,读取文件所有内容
fread($handle,filesize($filename));

// 向文件中写入内容
fwrite()

// 读取指针所在位置，返回一个整数
ftell($handle);
// 把指针从新定位到哪
fseek($handle,0);

//关闭文件
fclose($handle); 