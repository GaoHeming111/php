<?php
function test(){
    echo '12345';
}

$func = 'test';
//先判断下是否是函数
if(is_callable($func){
    $func(); //会输出test函数中的内容
})
