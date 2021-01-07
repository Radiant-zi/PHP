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
        .button5{
            margin-top:10px;
            margin-left:130px;
        
        }
        .title{
            font-size:  40px;
            text-align:center;//标题居中
        }
    </style>
</head>
<body>

    <div>
        <nav>
            <span>
                <?php
                    include 'conn/connect_db.php';

                    $sql = "select uname from user where id={$_COOKIE['id']}";//根据id获取用户名
                    $result = mysqli_query($conn,$sql);
                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        echo $row['uname'];
                    }

                    mysqli_close($conn);
                ?>
            </span>
        </nav>
    
        <div class="topnav">
        <a href="home.php">通讯录列表</a>
        <a class="active" href="user.php">个人中心</a>
        <a href="logout.php">注销</a>
        </div>

        <br>


        <form action="change_username.php" method="POST">
            <div class="title">修改用户名</div>
            <div class="input_control">
            <input type="text" class="form_input" placeholder="新用户名" name="uname">
            <button type="submit" class="button5">修改</button>
            </div>
            
        </form>


        <br>
        <br>

        <form action="change_pwd.php" method="POST">
            <div class="title">修改新密码</div>
            <div class="input_control">
                <input type="password" class="form_input" placeholder="原密码" name="pwd">
            </div>
            <div class="input_control">
                <input type="password" class="form_input" placeholder="新密码" name="npwd">
            </div>
            <div class="input_control">
                <input type="password" class="form_input" placeholder="确认密码" name="cnpwd">
                <button type="submit" class="button5">修改</button>
            </div>
            
        </form>


      </div>
</body>
</html>
