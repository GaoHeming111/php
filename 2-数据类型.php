<?php
header('content-type:text/html;charset=utf-8');
// 设置错误级别，即所有错误但是除了通知级别的
error_reporting(E_ALL&~E_NOTICE);
// 8种主要数据类型
    1.整型8.
    2.浮点型
    3.布尔型
    4.字符串型
        A.单引号不解析变量，双引号解析变量
        B.转义符 \n换行 \t水平制表符 \r回车
        C.单引号只解析 \' \\ 这两个转义符
        D.双引号解析所有的转义符
        E.花括号{}可以将php中的变量括成一个整体来解析；{$username}
        F.花括号{}可以对字符串中指定字符做增删改查的操作；
            $string = '123456'
            echo $string{0} //输出1
            $string{0} = 2 //将第一位的数值替换成2
            $string{0} = '' //即删除第一位
            $string{6} = 7 //在下标为6处添加数值7
        G.heredoc:相当于双引号，以'<<<名称'开头，用于输出大段的文本
        H.nowdoc:相当于单引号，以'<<<'名称''开头，用于输出大段的文本
    5.数组
    6.对象
    7.资源
    8.空
            $var = 1;
            unset($var) //销毁变量
            type of($var) //null
//5种伪类型
        number
        mixed //混合
        callback //回调
        void //没有返回值
        ... //等等，表示可以接受任意多个参数