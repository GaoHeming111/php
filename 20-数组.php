<?php
//range()快速创建下标连续的索引数组
// compact()快速创建关联数组
range(起始值，结束值，步长（可选）);

$username = 'gao';
$age = '12';
$email = '651812464@qq.com';
// 通过compact()创建的时候，只能写已经存在的变量名称
$userInfo = compact('username','age','email');

// 通过define()定义常量数组
define('arr1',array('a','b','c'));
print_r(arr1);