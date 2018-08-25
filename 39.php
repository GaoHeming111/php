<?php
/** 
 *读取文件内容，返回字符串
*/

function read_file($filename){
    if(is_file($filename) && is_readable($filename)){
        return file_get_contents($filename);
    }else{
        return false;
    }
}
var_dump(read_file('./static/a/222.txt'));


/** 
 *读取文件内容，返回数组
*/
function read_file_array($filename,$skip_empty_lines=false){
    if(is_file($filename) && is_readable($filename)){
        if($skip_empty_lines){
            return file($filename,FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);  // 再数组末尾不添加换行符 || 跳过空行
        }else{
            // file()把整个文件读入一个数组中
            return file($filename);
        }
    }else {
        return false;
    }
}
var_dump(read_file_array('./static/a/222.txt',true)); // 默认false,加true表示过滤掉空行



/** 
 *向文件中写入内容，但是会覆盖内容
*/
function write_file($filename,$data){
    $dirname = dirname($filename);
    // 检测目标路径是否存在
    if(!file_exists($dirname)){
        mkdir($dirname,0777,true);
    }
    // 判断内容是否是数组或者对象
    if(is_array($data)||is_object($data)){
        $data = serialize($data);
    }
    // 向文件中写入内容
    if(file_put_contents($filename,$data)!==false){
        return true;
    }else{
        return false;
    }
}
var_dump(write_file('./static/a/222.txt','gaoheming111'));


/** 
 *向文件中写入内容,并追加再内容之后
*/
function write_file1($filename,$data,$clearFlag=false){
    $dirname = dirname($filename);
    // 检测目标路径是否存在
    if(!file_exists($dirname)){
        mkdir($dirname,0777,true);
    }
    // 检测文件是否存在并可读
    if(is_file($filename)&&is_readable($filename)){
        // 需要读取文件内容，并把写入的内容和之前的拼接到一起
        if(filesize($filename)>0){
            $srcData = file_get_contents($filename);
        }
    }
    // 判断内容是否是数组或者对象
    if(is_array($data)||is_object($data)){
        $data = serialize($data);
    }
    $data = $srcData.$data;
    // 向文件中写入内容
    if(file_put_contents($filename,$data)!==false){
        return true;
    }else{
        return false;
    }
}
var_dump(write_file1('./static/a/222.txt','gaoheming111'));




/** 
 *截断内容到指定大小
*/
function truncate_file($filename,$length){
    // 检测是否是文件
    if(is_file($filename)&&is_readable($filename)){
        $handle = fopen($filename,'r+');
        // 使截取的长度大于等于0
        $length = $length<0?0:$length;
        ftruncate($handle,$length);
        fclose($handle);
        return true;
    }else{
        return false;
    }
}
var_dump(truncate_file('./static/a/222.txt',3));