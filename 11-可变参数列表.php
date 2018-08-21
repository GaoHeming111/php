<?php
function test(){
    echo func_num_args(); //输出3，即输出传递进来的参数个数
    print_r(func_get_args()); //获取传递进来的数值
}
test(1,2,3)