/**
 * Created by PhpStorm.
 * User: yu
 * Date: 2016/7/22
 * Time: 15:27
 */

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>自动换行</title>
    <style>
        table{
            width:980px;
            border:#000 solid 1px;
            margin:auto;
            border-collapse: collapse;
        }
        td{
            border:#000 solid 1px;
            text-align:center;
        }
    </style>
</head>

<body>
<table>
    <tr>
        <?php
        phpinfo();
        for($i = 1; $i <= 100; $i++)
        {
            echo '<td><img src = "../images/'.$i.'.bmp"></td>';
            if ( $i % 10 == 0 ){
                echo '</tr><tr>';
            }

        }
        ?>
    </tr>
</table>
</body>
</html>