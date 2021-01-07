<?php
    if (isset($_COOKIE['id'])) {//判断cookie是否到时间限制,如果到了时间限制，就不发生变化，如果没到时间，则弹到home页面
        echo "<script>location.href='home.php'</script>";
    }
?>
<!DOCTYPE html>
<html>
<head>

    <title>通讯录管理系统</title>
    <link rel="stylesheet" href="./css/background.css">
    <style>
        body {
            color: white;
            background: url(./img/bg.jpg);
            margin-top: 10%;
            background-size: cover;
        }
        .title {
            font-size:  60px;
            text-shadow: 2px 2px 3px #000000;/*白色文本阴影效果*/
            margin-bottom: 100px;
        }

    </style>
</head>

<body>

    <div>

    <table align="center">
    <td align="center">
        <div class="title">通讯录管理系统</div>
        <button class="button" style="vertical-align:middle" onclick="location.href='register.php'"><span>注册</span></button>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button class="button" style="vertical-align:middle" onclick="location.href='login.php'"><span>登录</span></button>
        </td>
    </table>
    </div> 
</body>
</html>
