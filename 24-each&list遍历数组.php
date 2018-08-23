<?php
// 不常用，遍历数组就用foreach就行
$arr = [
    [1,'gao','22'],
    [2,'gao1','32'],
    [3,'gao2','42']
];

// list : 将下标连续的索引数组赋值给相应的变量
foreach($arr as list($id,$name,$age)){
    echo $id,$name,$age;
}

// each : 得到当前指针所在位置的键值对，返回的是数组，包含四个部分，并且将指针向下移动一位
while(list($key,$val)=each($arr)){
    echo $k,'------',$v;
}