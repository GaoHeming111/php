<?php
header('content-type:text/html;charset=utf-8');
// 设置错误级别，即所有错误但是除了通知级别的
error_reporting(E_ALL&~E_NOTICE);

强制转换（显式转换）
    临时转换
        intval($username)
    永久转换
        settype($var,$type) //设置变量类型
        gettype($var) //返回变量的类型
        通过变量函数库检查变量的类型 _is*  //$var=123; is_int($var);------------返回true 
        检测是否为数值型或者是字符串形式的值 //is_numeric()