<?php
  include 'conn/connect_db.php';
  $uid = $_COOKIE['id'];
  $name = $_POST['name'];
  $sex = $_POST['sex'];
  $address = $_POST['address'];
  $number = $_POST['number'];
  $qq = $_POST['qq'];
  $birth = $_POST['birth'];
  $phone = $_POST['phone'];
  
  if ($name == ''|| $number == '') {
    echo "<script>alert('请填完所有项！');window.location.href='home.php';</script>";
  }

  $sql = "INSERT INTO list (name, sex, address, number, qq, birth,phone, uid) VALUES ('$name', '$sex', '$address', '$number' , '$qq', '$birth','$phone', $uid)";
  $result = mysqli_query($conn,$sql);
  if ($result === TRUE) {
      echo "<script>location.href='home.php'</script>";
  }
  else {
      echo "<script>alert('添加失败！');window.location.href='home.php';</script>";
  }
?>  