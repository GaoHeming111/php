<?php
function hlt($n){
    if($n===1){
        return 1;
    }else{
        return 2*hlt($n-1)+1;
    }
}

echo hlt(64);