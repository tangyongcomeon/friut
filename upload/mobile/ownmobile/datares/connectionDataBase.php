<?php
header("Content-type: text/html; charset=utf-8"); 

    $mysql_server_name="localhost"; //数据库服务器名称
    $mysql_username="tangyong"; // 连接数据库用户名
    $mysql_password="123456"; // 连接数据库密码
    $mysql_database="fruit"; // 数据库的名字
    
    // 连接到数据库
    $conn=mysql_connect($mysql_server_name, $mysql_username,$mysql_password);
                        
     // 从表中提取信息的sql语句
    $strsql="SELECT * FROM `t_user`";
    // 执行sql查询
    // $result=mysql_db_query($mysql_database, $strsql, $conn);
    mysql_select_db($mysql_database,$conn);
    $result=mysql_query($strsql,$conn); 
    // 获取查询结果
    // $row=mysql_fetch_row($result);
    $jarr = array();
    // 循环取出记录
    while ($row=mysql_fetch_array($result))
    {
         $count=count($row);//不能在循环语句中，由于每次删除 row数组长度都减小  
        for($i=0;$i<$count;$i++){  
            unset($row[$i]);//删除冗余数据  
        }   
        array_push($jarr,$row);
        // echo json_encode($row);

    }
    print_r($jarr);//查看数组
    echo "<br/>";
     
    echo '<hr>';
    echo '编码后的json字符串：';
    echo $str=json_encode($jarr);//将数组进行json编码
    echo '<br>';
    $arr=json_decode($str);//再进行json解码
    echo '解码后的数组：';
    print_r($arr);//打印解码后的数组，数据存储在对象数组中
    // 释放资源
    mysql_free_result($result);
    // 关闭连接
    mysql_close($conn);  
?>