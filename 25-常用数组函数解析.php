<?php
（一）
$str = '1,3,4,5,7';
// 字符串转化为数组
$arr=explode(',',$str);
// 计算数组中各项的和
echo array_sum($arr);
// 计算数组中各项的乘积
echo array_product($arr);

（二）截取文件拓展名，并且检测拓展名是否在['jpg','jpeg','gif'];这个数组中
$Exts = ['jpg','jpeg','gif'];
$filename = '1.txt.php.jpg';
$arr = explode('.',$filename);
$ext = end($arr);
// 检测数组中是否存在某个值,返回true或false
in_array($ext,$Exts);

（三）快速生成字符串
$str1 = join('',range(0,9))

(四)合并数组，生成随机四位数
$newArr = array_merge($arr1,$arr2);
// array_rand取随机数，array_flip交换键名和键值
$res = array_rand(array_flip($newArr),4)
echo join('',$res);

(五)
array_keys();得到数组中的键名，作为数组返回
array_values();得到数组中的键值，作为数组返回