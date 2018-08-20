<?php
header('content-type:text/html;charset=utf-8');
//接受表单发送过来的数据

//$_POST 接受表单以post形式发送过来的数据
echo '用户名：', $_POST['username'];