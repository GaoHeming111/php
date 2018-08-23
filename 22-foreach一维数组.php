<?php
$arr = [
    5=>"a",
    8=>"123",
    123=>"abc"
];
foreach($arr as $val){
    echo $val,'<br>';
}

foreach($arr as $key=>$val){
    echo $key,'----',$val,'<br>';
}