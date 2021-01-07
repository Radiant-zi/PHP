<?php
  if (count($_GET) > 0) {//判读是否得到了传参的值
    $id = $_GET['id'];
    $name = $_GET['name'];
    $sex = $_GET['sex'];
    $address = $_GET['address'];
    $number = $_GET['number'];
    $qq = $_GET['qq'];
    $birth = $_GET['birth'];
    $phone = $_GET['phone'];
  }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <title>通讯录管理系统</title>
    <link rel="stylesheet" href="./css/background.css">
    <style>
        body {
            background: url(./img/qq.jpg);
            background-size: cover;
        }
        .title {
            text-align:center;//标题居中
        }
        .button5{
            margin-top:10px;
            margin-left:47%;
        }
    </style>
</head>
<body>

    <div class="topnav">
        <a href="home.php">通讯录列表</a>
        <a href="user.php">个人中心</a>
        <a href="logout.php">注销</a>
        
    </div>

      <h1>修改信息</h1>
      <form action="" method="POST">
        <input style="display: none;" name="id" value="<?php echo $id ?>">

        <div class="input_control">
          <label>姓名：</label>
          <input class="form_input" type = "text" name="name" value="<?php echo $name ?>">
        </div>


        <div class="radio">
          <label>性别：</label>
          
            <input id="radio-1" type="radio" name="sex" value="男" <?php if ($sex == '男') echo "checked" ?>>
            <label for="radio-1" class="radio-label">男</label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          
            <input id="radio-2" type="radio" name="sex" value="女" <?php if ($sex == '女') echo "checked" ?>>
            <label for="radio-2" class="radio-label">女</label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          
            <input id="radio-3" type="radio" name="sex" value="其他" <?php if ($sex == '其他') echo "checked" ?>>
            <label for="radio-3" class="radio-label">其他</label>
          
        </div>

        <div class="input_control">
          <label>地址：</label>
          <input class="form_input" type = "text" name="address" value="<?php echo $address ?>">
        </div>

        <div class="input_control">
          <label>号码：</label>
          <input class="form_input" name="number" type = "number" value="<?php echo $number ?>">
        </div>

        <div class="input_control">
          <label>QQ：</label>
          <input class="form_input" name="qq" type = "number" value="<?php echo $qq ?>">
        </div>

        <div class="input_control">
          <label>生日：</label>
          <input class="form_input" name="birth" type = "number" value="<?php echo $birth ?>">
        </div>
        

        <div class="radio">
          <label>手机：</label>
          <br>
          
            <input id="radio-4" type="radio" name="phone" value="手机" <?php if ($phone == '手机') echo "checked" ?>>
            <label for="radio-4" class="radio-label">手机</label>
          
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input id="radio-5" type="radio" name="phone" value="单位" <?php if ($phone == '单位') echo "checked" ?>>
            <label for="radio-5" class="radio-label">单位</label>
          
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input id="radio-6" type="radio" name="phone" value="住宅" <?php if ($phone == '住宅') echo "checked" ?>>
            <label for="radio-6" class="radio-label">住宅</label>
          
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input id="radio-7" type="radio" name="phone" value="传真" <?php if ($phone == '传真') echo "checked" ?>>
            <label for="radio-7" class="radio-label">传真</label>
          
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input id="radio-8" type="radio" name="phone" value="其他" <?php if ($phone == '其他') echo "checked" ?>>
            <label for="radio-8" class="radio-label">其他</label>

          </div>
        </div>

        <button type="submit" class="button5">修改</button>
      </form>
    </div>
</body>
</html>
<?php
    include 'conn/connect_db.php';
    if (count($_POST) == 0) {//如果无提交值，则返回重新输入
      return;
    }  

    $id = $_POST['id'];
    $name = $_POST['name'];
    $sex = $_POST['sex'];
    $address = $_POST['address'];
    $number = $_POST['number'];
    $qq = $_POST['qq'];
    $birth = $_POST['birth'];
    $phone = $_POST['phone'];
    $result = mysqli_query($conn,"update list set name='$name', sex='$sex', address='$address', number='$number', qq='$qq', birth='$birth', phone='$phone' where id=$id");//执行sql语句
    mysqli_close($conn);
    echo "<script>alert('修改成功！');window.location.href='home.php';</script>";
?>