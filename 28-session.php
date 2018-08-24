<?php
session:提供在php脚本中定义全局变量的方法，为了解决http短连接的问题，session是基于HTTP服务器的用于保持状态的方法。

cookie 和session 的区别：

1、cookie数据存放在客户的浏览器上，session数据放在服务器上。

2、cookie不是很安全，别人可以分析存放在本地的COOKIE并进行COOKIE欺骗
   考虑到安全应当使用session。

3、session会在一定时间内保存在服务器上。当访问增多，会比较占用你服务器的性能
   考虑到减轻服务器性能方面，应当使用COOKIE。

4、单个cookie保存的数据不能超过4K，很多浏览器都限制一个站点最多保存20个cookie。

5、所以个人建议：
   将登陆信息等重要信息存放为SESSION
   其他信息如果需要保留，可以放在COOKIE中

// 获取设置会话名称
session_name[];
// 获取设置会话ID
session_id[];
// 启动新会话或重用现有会话
session_start();
// 存储数据，定义全局变量username
$_SESSION['username']='gao'
//一般写在注销页面上
session_destroy();