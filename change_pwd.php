<?php
    include 'conn/connect_db.php';
    $pwd = $_POST['pwd'];
    $npwd = $_POST['npwd'];
    $cnpwd = $_POST['cnpwd'];
    
    $sql = "SELECT * FROM user where id={$_COOKIE['id']} and pwd=$pwd";
    $result = mysqli_query($conn,$sql);
    $type = 1;
    if ($npwd != $cnpwd) {
        echo "<script>alert('两个密码不一致，请重新输入。')</script>";
        echo "<script>location.href='user.php'</script>";
        $type = 0;
    }
    if (mysqli_num_rows($result) > 0 && $type == 1) {
        $sql = "update user set pwd='$npwd' where pwd='$pwd' and id= {$_COOKIE['id']}";
    
        if (mysqli_query($conn,$sql) === TRUE) {
            echo "<script>alert('修改成功');window.location.href='user.php';</script>";
        }
        else {
            echo "<script>alert('修改失败');window.location.href='user.php';</script>";
        }
    }
    else {
        echo "<script>alert('原密码不正确。');window.location.href='user.php';</script>";
    }

    mysqli_close($conn);

?>