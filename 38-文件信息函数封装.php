<?php
/** 
 *返回文件信息，返回的是一个数组
*/
function get_file_info($filename){
    if(!is_file($filename)||!is_readable($filename)){
        return false;
    }else{
        return[
                                        // 上次访问时间
            'atime'=>date("Y-m-d H:i:s",fileatime($filename)),
                                        // 文件修改时间
            'mtime'=>date("Y-m-d H:i:s",filemtime($filename)),
                                        // 取得文件的 索引节点 修改时间
            'ctime'=>date("Y-m-d H:i:s",filectime($filename)),
            'size'=>trans_byte(filesize($filename)),
            "type"=>filetype($filename)
        ];
    }

}
var_dump(get_file_info('./static/a/222.txt'));

/** 
 *转换字节单位大小的；返回的是转换之后的字符串
*/
function trans_byte($byte,$precision){
    $kb=  1024;
    $mb = $kb*1024;
    $gb = $mb*1024;
    $tb = $gb*1024;
    if($byte<$kb){
        return $byte.'B';
    }elseif($byte<$mb){
        // 指保留两位小数
        return round($byte/$kb,$precision).'KB';
    }elseif($byte<$gb){
        return round($byte/$mb,$precision).'MB';
    }elseif($byte<$tb){
        return round($byte/$gb,$precision).'GB';
    }else{
        return round($byte/$tb,$precision).'TB';
    }
}
var_dump(trans_byte(12345678111));