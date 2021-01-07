<?php
    include 'conn/connect_db.php';
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];
    $type=1;

    if ($_POST['uname'] == '' || $_POST['pwd'] == '' || $_POST['cpwd'] == '') {
        echo "<script>alert('请填完所有项！');window.location.href='register.php';</script>";
        $type=0;
    }else if ($_POST['pwd'] != $_POST['cpwd']) {
        echo "<script>alert('密码不一致！');window.location.href='register.php';</script>";
        $type=0;
    }
    if($type == 1){
        $sql = "INSERT INTO user (uname, pwd) VALUES ('$uname', '$pwd')";
        $result = mysqli_query($conn,$sql);//执行sql语句
    }
    
    if ($result === TRUE) {//判断是否插入成功
        echo "<script>alert('注册成功！');window.location.href='login.php';</script>";
    }
    else {
        echo "<script>alert('注册失败！');window.location.href='register.php';</script>";
    }
 
    mysqli_close($conn);
?>