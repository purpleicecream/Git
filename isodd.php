
/**
 * Created by PhpStorm.
 * User: yu
 * Date: 2016/7/21
 * Time: 9:15
 */
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IsOdd</title>
</head>

<body>
<?php
var_dump($_POST['num']);
if( isset( $_POST['button'] )){
    $num = $_POST['num'];
    if( is_numeric($num)){
        $num += 0;
        if ( is_int( $num )){
            if( $num % 2 == 0 ){
                echo "{$num} 是偶数";
            }else{
                echo "${num} 是奇数";
            }
        }else{
            echo "{$num}不是整数";
        }

    }else{
        echo "{$num}不是数字";
    }

}else{
    echo "你是傻瓜"."<br>";
}
?>
<form name = "form1" method = "post" action = "">
    <table width = "500" border = "1 solid lime" align = "center">
        <tr>
            <th colspan = "2">请输入数字</th>
        </tr>
        <tr>
            <td>请输入一个数字</td>
            <td><input type = "text" name = "num" id = "num" value = ""></td>
        </tr>
        <tr>
            <td colspan = "2" align = "center"><input type = "submit" name = "button" id = "button" value = "提交"></td>
        </tr>
    </table>
</form>
</body>
</html>