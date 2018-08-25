<?php
/** 
 * 删除文件操作
*/
function del_file($filename){
    // 检测要删除的文件是否存在，并且是否有权操作
    if(!file_exists($filename)||!is_writable($filename)){
        return false;
    }
    if(unlink($filename)){
        return true;
    }else{
        return false;
    }
}
var_dump(del_file('./static/2.txt'));
