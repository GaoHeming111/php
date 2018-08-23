<?php
    date_default_timezone_set('PRC');
    $filename='msg.txt';
    $msgs=[];
    // 先检测文件是否存在
    if(file_exists($filename)){
        // 读取文件中的内容
        $string = file_get_contents($filename);
        if(strlen($string)>0){
            // 反序列化
            $msgs=unserialize($string);
        }
    }
    // 检测用户是否点击了提交按钮
    if(isset($_POST['pubMsg'])){
        $username = $_POST['username'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $time = time();
        // 将其组成关联数组
        $data=compact('username','title','content','time');
        array_push($msgs,$data);
        
        $msgs = serialize($msgs); //这块变成字符串
        
        if(file_put_contents($filename,$msgs)){
            // 这块一定要加location返回到原页面
            echo '<script>alert("留言添加成功");location.href="27.php";</script>';
        }else{
            echo '<script>alert("留言添加失败");location.href="27.php";</script>';
        }
    }
    // print_r($msgs);
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
    <?php if(is_array($msgs)&&count($msgs)>0): ?>
    <table border='1' bgcolor='pink' width="80%">
        <tr>
            <td>编号</td>
            <td>用户名</td>
            <td>标题</td>
            <td>时间</td>
            <td>内容</td>
        </tr>
        <?php $i=1; foreach($msgs as $val): ?>
            <tr>
                <td>
                    <?php echo $i++; ?>
                </td>
                <td>
                    <?php echo $val['username']; ?>
                </td>
                <td>
                    <?php echo $val['title']; ?>
                </td>
                <td>
                    <?php echo date('m/d/Y H:i:s',$val['time']) ?>
                </td>
                <td>
                    <?php echo $val['content']; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    <h2>请留言</h2>
    <form action="#" method='post'>
        <label>用户名</label>
        <input type='text' name='username' required>
        <label>标题</label>
        <input type='text' name='title' required>
        <label>内容</label>
        <textarea cols="30" rows="10" name='content' required></textarea>
        <input type="submit" value='提交' name='pubMsg'>
    </form>
</body>
</html>