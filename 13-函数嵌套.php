<?php
function foo(){
    $a = '123';
    function bar(){
        echo $a; //会报错 因为bar()的作用域是全局的。但是$a的作用域只是在函数foo()之中
    }
}