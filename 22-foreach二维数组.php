<?php
//二维的索引加关联数组
$arr=[
    ['id'=>1,"username"=>"gao1",'age'=>12],
    ['id'=>2,"username"=>"gao2",'age'=>22],
    ['id'=>3,"username"=>"gao3",'age'=>32],
    ['id'=>4,"username"=>"gao4",'age'=>42],
    ['id'=>5,"username"=>"gao5",'age'=>52]
];
foreach($arr as $val){
    echo '编号是',$val['id'],'<br>';
    echo '年龄是',$val['age'],'<br>';
}