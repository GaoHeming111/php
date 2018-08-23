<?php
// foreach 分为两种情况
（1）只要键值
foreach($数组名称 as $val){
    循环体
}

（2）既要键名又要键值
foreach($数组名称 as $key=>$val){
    循环体
}

PHP7中foreach的改变
（1）foreach循环对数组内指针不再起作用
（2）按照值进行循环的时候，foreach是对该数组的值的拷贝
（3）按照引用进行循环的时候，在循环体内修改数组会对循环有影响