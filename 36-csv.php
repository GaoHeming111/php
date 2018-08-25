<?php
$filename = "./static/1.csv";
$handle = fopen($filename,"rb+");
$rows=[];
// 得到csv文件中的内容
while($row = fgetcsv($handle)){
    $rows[] = $row;
}
print_r($rows);

// 向csv文件中写入
fputcsv($handle,$val);