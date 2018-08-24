<?php
$filename = __DIR__.'/static/1.txt';
            // 加b表示可以读取二进制
$handle = fopen($filename,'rb+');
// 向文件写入内容，如果之前有内容，会覆盖最之前的内容
fwrite($handle,'gaoheming');
fclose($handle);