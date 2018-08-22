<?php
header('charset=utf-8;content-type:text/html');
1.// 获取字符串长度,只能获取英文字符串或数字字符串的长度
strlen($str);

2.//转换成大写    转换成小写 
strtoupper()   strtolower()

3.// 字符串替换函数,把str中的a全部替换成b
$str = 'javascript'
str_replace('a','b',$str);//替换时区分大小写
str_ireplace(); //替换时不区分大小写

4.// 把搜字母替换成大写
ucwords(str);

5.//将预定义的字符转换成html实体
htmlspecialchars($str,ENT_COMPAT); //默认，仅编码双引号

6.//删除字符串中不需要的空格换行等
trim($str)

7.//返回一个字符在字符串中第一次出现的位置，从0开始,如果没有出现则返回false
strpos('abcd','b');
strrpos();//返回一个字符在字符串中最后一次出现的位置

8.//返回一个字符串在另一个字符串最后出现的位置到结尾之间的（内容）
strrchr()

9.//字符串反转
strrev($str)

10.//随机打乱字符串中字符的排列顺序
str_shuffle($str);

11.//用一个字符串分割另一个字符串,返回一个数组
$arr=explode('|',$str);

12.//将数组里元素链接成字符串
$str = implode(';'$arr); //以分号进行连接

13.//格式化字符串函数
$num = 5;
$str = 'shanghai';
$txt = sprintf('there are %d million cars in %s',$num,$str);
