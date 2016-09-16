<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Link</title>
    <style>
        table, th, td
        {
            border:1px solid black;
            border-collapse: collapse;
            padding:5px;
        }
        th{
            background-color: aquamarine;
        }

    </style>
</head>

<body>

<?php
//    $link = mysql_connect( 'localhost', 'root', 'se123456');
//    if( $link ){
//        echo 'Yes';
//    }else{
//       /* echo 'No';*/
//        die( 'No' );
//    }
//It is right upright

$link =  @mysql_connect( 'localhost', 'root', 'se123456') or die( 'NO' );

/*mysql_query( 'use data' ) or die( '数据库选择失败' )；方法一*/
//方法二：
mysql_select_db( 'data' ) or die( '数据库连接失败' );
//3 获取products表的数据
$rs = mysql_query( 'select * from products' );
/*var_dump( $rs );
echo '<br>';*/

?>
<table>
    <tr>
        <th>proTD</th>
        <th>proName</th>
        <th>proGuide</th>
        <th>proPrice</th>
        <th>proAmount</th>
        <th>proImage</th>
        <th>proWeb</th>
    </tr>
    <?php

    //索引数组
/*    while ( $rows = mysql_fetch_row($rs) ) {
        echo '<tr>';
        echo '<td>'.$rows[0].'</td>';
        echo '<td>'.$rows[1].'</td>';
        echo '<td>'.$rows[2].'</td>';
        echo '<td>'.$rows[3].'</td>';
        echo '<td>'.$rows[4].'</td>';
        echo '<td><img alt = "图片暂缺" src = "../'.$rows[5].' "></td>';
        echo '<td>'.$rows[6].'</td>';
        echo '<tr>';
    }*/

    //关联数组
 /*   while( $rows = mysql_fetch_array( $rs )){
        echo '<tr>';
        echo '<td>'.$rows['proID'].'</td>';
        echo '<td>'.$rows['proname'].'</td>';
        echo '<td>'.$rows['proguide'].'</td>';
        echo '<td>'.$rows['proprice'].'</td>';
        echo '<td>'.$rows['proamount'].'</td>';
        echo '<td><img alt = "../images/logo.gif" src = "../'.$rows['proimages'].' "></td>';
        echo '<td>'.$rows['proweb'].'</td>';
        echo '<tr>';
    }*/
    //匹配成对象
    while( $rows = mysql_fetch_object( $rs )){
        echo '<tr>';
        echo '<td>'.$rows->proID.'</td>';
        echo '<td>'.$rows->proname.'</td>';
        echo '<td>'.$rows->proguide.'</td>';
        echo '<td>'.$rows->proprice.'</td>';
        echo '<td>'.$rows->proamount.'</td>';
        echo '<td><img alt = "../images/logo.gif" src = "../'.$rows->proimages.' "></td>';
        echo '<td>'.$rows->proweb.'</td>';
        echo '<tr>';
    }
    //释放资源
    mysql_free_result( $rs );
    //关闭连接
    mysql_close( $link );
    //起始页面执行完毕后会释放所有资源
    ?>
</table>

</body>
</html>
/**
 * Created by PhpStorm.
 * User: yu
 * Date: 2016/7/23
 * Time: 8:15
 */







