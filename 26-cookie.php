<?php
// cookie存储在客户端，session存储在服务端

// 设置数据，有效时间为10天，全局路径都可以访问到
setcookie('username','Tom',time()+10*86400,'/');
