<?php
//读取文件中内容
$filename = './static/1.csv';
file_get_contents($filename);

// 向文件中写入内容,写入的data必须是一个字符串；会覆盖之前的内容
// 如果文件不存在，会创建一个
file_put_contents($filename,$data);

// 如果不想覆盖之前的内容，可以先取出之前的内容，再添加
$string = file_get_contents($filename);
$data = $string.'hello world';
file_put_contents($filename,$data);

// 如果用file_put_contents写入数组要序列化后再写入文件,然后再反序列化
$data = ['a','b','c'];
$data = serialize($data);
file_put_contents($filename,$data);
$res = file_get_contents($filename);
print_r(unserialize($res));

// 将数组或对象转换为json格式再写入文件
$data=[
    ['a','b','c'],
    ['d','e','f']
];
$data = json_encode($data);
file_put_contents($filename,$data);
$res = json_decode(file_get_contents($filename));
print_r($res);