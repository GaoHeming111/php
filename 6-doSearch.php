<?php
header('content-type:text/html;charset=utf-8');
//$_GET['名称'] 接受以问号传递过来的数据 
$keyword = $_GET['keyword'];
echo '用户搜索的关键字为：', $keyword;