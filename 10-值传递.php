<?php
$a = 3;
$b = 4;
function change($c){
    $c = 5;
}
change($a)

echo $a; //3

<?php
$a = 3;
$b = 4;
// 加上&就会把值传递过去
function change(&$c){
    $c = 5;
}
change($a)

echo $a; //5