<?php
    $arr=[
        ['id'=>1,"username"=>"gao1",'age'=>12],
        ['id'=>2,"username"=>"gao2",'age'=>22],
        ['id'=>3,"username"=>"gao3",'age'=>32],
        ['id'=>4,"username"=>"gao4",'age'=>42],
        ['id'=>5,"username"=>"gao5",'age'=>52]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding='0' cellspacing='0' width='80%' bgcolor='pink'>
        <tr>
            <td>编号</td>
            <td>姓名</td>
            <td>年龄</td>
        </tr>
        <?php
        foreach($arr as $val){
        ?>
            <tr>
                <td><?php echo $val['id'];?></td>
                <td><?php echo $val['username'];?></td>
                <td><?php echo $val['age'];?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>