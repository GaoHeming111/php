<?php
// 数组指针相关函数
key($arr);//得到当前指针所在位置的键名，如果不存在返回null
current($arr);//得到当前指针所在位置的键值,如果不存在返回false
next($arr);//将数组指针向下移动一位，并且返回当前指针所在位置的键值；如果没有则返回false
prev($arr);//将数组指针向下移动一位，并且返回当前指针所在位置的键值；如果没有则返回false
reset($arr);//将数组指移动到数组开始，并且返回当前指针所在位置的键值；如果没有则返回false
end($arr);//将数组指针移动到数组末尾，并且返回当前指针所在位置的键值；如果没有则返回false

// 利用指针函数获取文件拓展名
$filename = '1.txt.php';
$res = explode('.',$filename);
$ext = end($res);
echo $ext;