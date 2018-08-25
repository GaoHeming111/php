<?php
/** 
 *重命名文件操作
*/

function rename_file($oldname,$newname){
    // 检测是否为文件并且检测是否存在
    if(!is_file($oldname)){
        return false;
    }
    // 得到原文件所在路径
    $path = dirname($oldname);  //返回路径中目录部分
    $destname = $path.DIRECTORY_SEPARATOR.$newname;
    if(is_file($destname)){
        return false;
    }
    if(rename($oldname,$newname)){
        return true;
    }else{
        return false;
    }
}
var_dump(rename_file('./static/1.txt','./static/222.txt'));