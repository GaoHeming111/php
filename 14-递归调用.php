<?php
function sum($n,$m){
    if($m <= $n){
        return $n;
    }else{
        // $n + ($n+1) +...+ ($m-1) + $m
        return sum($n,$m-1) + $m;
    }
}

echo sum(1,100);