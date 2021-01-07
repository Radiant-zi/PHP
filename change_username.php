<?php
    include 'conn/connect_db.php';
  
    $sql = "update user set uname='{$_POST['uname']}' where id= {$_COOKIE['id']}";

    if (mysqli_query($conn,$sql) === TRUE) {
        echo "<script>alert('修改成功');window.location.href='user.php';</script>";
    }
    else {
        echo "<script>alert('修改失败');window.location.href='user.php';</script>";
    }
?>