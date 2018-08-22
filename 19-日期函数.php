<?php
1.格式化日期函数
date('Y年m月d日H:i:s');

2.时区设置
date_default_timezone_set('Asia/ShangHai');

3.时间戳time()
    获取昨天的时间：
    date('Y-m-d H:i:s',time()-86400);//86400只一天的秒数

4.字符串转时间戳
strtotime('-3 weeks'); //返回三个星期前的时间戳
strtotime('last day of -1 month'); //返回一个月之前的时间戳

5.获取时间戳和微秒数
$start = microtime(true);
$end = microtime(true);

6.生产唯一ID
md5(uniqid(microtime().mt_rand()));