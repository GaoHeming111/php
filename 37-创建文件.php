<?php
/** 
 * 创建文件操作
*/
function create_file($filename){
    // 检测文件是否存在，不存在则创建之
    if(file_exists($filename)){
        return false;
    }
    // 检测目录是否存在，不存在则创建
    if(!file_exists(dirname($filename))){
        // 创建目录，可以创建多级
        mkdir(dirname($filename),0777,true);
    }
    if(touch($filename)){
        return true;
    }else{
        return false;
    }
}
var_dump(create_file('./static/2.txt'));