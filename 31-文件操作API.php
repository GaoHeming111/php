<?php
// 文件相关操作
// 文件的创建 删除 剪切 重命名 拷贝

// 检测文件是否存在
file_exists($filename);
// 创建
touch($filename);
// 删除
unlink($filename);
// 重命名或剪切文件
rename($filename,$newname);
// 拷贝
$source = '2.php';
$dest = 'static/2.php';
copy($source,$dest);