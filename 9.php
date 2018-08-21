<?php
header('charset=utf-8;content-type:text/html');
date_default_timezone_set('PRC'); //设置时区为中国
echo date("Y年m月d日 H:i:s"); //w返回一周内的的几天（0-6） 0代表星期六
exit() //程序终止执行
die() //程序终止执行