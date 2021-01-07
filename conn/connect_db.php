<?php  

    $conn = mysqli_connect("localhost","root","njnu123456") or die ('数据库连接失败！');   

    if(mysqli_select_db($conn,"php") == false)
    {
        echo "数据库选择失败！";
    }
?>
