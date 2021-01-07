<?php
    include 'conn/connect_db.php';
    $id = $_GET['id'];

    $sql = "DELETE FROM list WHERE id=$id";

    $result = mysqli_query($conn,$sql);//执行sql语句
    
    mysqli_close($conn);

    echo "<script>location.href='home.php'</script>";
?>