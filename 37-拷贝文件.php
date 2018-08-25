<?php
/** 
 *拷贝文件操作
*/

function copy_file($filename,$dest){
    // 检测dest目录是否存在。不存在则创建
    if(!is_dir($dest)){
        mkdir($dest,0777,true);
    }
    // 获取文件名字
    $destname = $dest.DIRECTORY_SEPARATOR.basename($filename);
    // 检测目录下是否存在同命名文件
    if(file_exists($destname)){
        return false;
    }
    if(copy($filename,$destname)){
        return true;
    }else{
        return false;
    }
}
var_dump(copy_file('./static/1.txt','./static/a'));