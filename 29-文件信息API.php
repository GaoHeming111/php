<?php
// 文件信息相关API
$filename = "./static/1.txt";

// 获取文件类型
echo filetype($filename),'<br>';

//获得文件大小,大小是字节数
echo filesize($filename),'<br>';

// 创建文件时间
    date('Y年m月d日 H:i:s',filectime());

// 修改文件时间
    filemtime()

// 文件最后访问时间
    fileatime()

// 检测文件是否可读 可写 可执行
is_readable()  is_writable()  is_executable()

// 检测是否为文件，并且检测文件是否存在
is_file()