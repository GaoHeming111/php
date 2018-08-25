<?php
// -文件读写函数封装
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





/** 
 *下载文件
*/
function down_file($filename,$allowDownExt=array('jpg','jpeg','gif','txt','png','html','rar','zip')){
    if(!is_file($filename) || !is_readable($filename)){
        return false;
    }else{
        // 检测文件类型是否允许下载
        // 将字符串转化为小写
        $ext = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
        if(!in_array($ext,$allowDownExt)){
            return false;
        }else{
            // 通过header()发送头信息
            header('content-type:application/octet-stream'); //告诉浏览器输出的是字节流
            header('Accept-Ranges:bytes'); //告诉浏览器返回的文件大小是按字节进行计算的
            header('Accept-Length:'.filesize($filename));//告诉浏览器返回的文件大小
            header('Content-Disposition:attachment;filename=king_'.basename($filename));//告诉浏览器文件作为附件处理，告诉浏览器最终下载完的文件名称
            readfile($filename);//读取文件内容
            exit;
        }
    }
}
echo 11;