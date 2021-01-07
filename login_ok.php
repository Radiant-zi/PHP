<?php
    include './conn/connect_db.php';

    if ($_POST['uname'] == '' || $_POST['pwd'] == '') {
        echo "<script>alert('请填完所有项！');window.location.href='login.php';</script>";
    }

    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];

    $sql = "SELECT id FROM user where uname='$uname' and pwd=$pwd";
    $result = mysqli_query($conn,$sql);//执行sql语句
  
    if (mysqli_num_rows($result) > 0) {//查询结果行数大于0
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];

        setcookie("id", $id, time() + 1000);//时间超出则会清除数据，使得需要重新登录
      
        echo "<script>alert('登录成功！');window.location.href='home.php';</script>";
    }
    else {
        echo "<script>alert('用户不存在或密码错误！');window.location.href='login.php';</script>";
    }

    mysqli_close($conn);
  
?>