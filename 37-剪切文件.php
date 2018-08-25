<?php
/** 
 *剪切文件操作
*/

function cut_file($filename,$dest){
    if(!is_file($filename)){
        return false;
    }
    if(!is_dir($dest)){
        mkdir($dest,0777,true);
    }
    $destname = $dest.DIRECTORY_SEPARATOR.basename($filename);
    if(is_file($destname)){
        return false;
    }
    if(rename($filename,$destname)){
        return true;
    }else{
         return false;
    }
}
var_dump(cut_file('./static/222.txt','./static/a'));