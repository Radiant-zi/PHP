<html>
<head>
    <title>登录</title>
    <link rel="stylesheet" href="./css/background.css">
    <style>
        body {
            background: url(./img/qq.jpg);
            background-size: cover;
            margin-top: 10%;
        }
        .title {
            font-size: 40px;
            margin-bottom: 100px;
        }
        .button{
          margin-top:50px;
        }
    </style>
</head>
</html>
<body>


    <div>
    <table align="center">
    <td align="center">
    <div class="title">登录</div>

    <form action="login_ok.php" method="POST">
    <div class="input_control">
        <input type="text" class="form_input" placeholder="用户名" name="uname">
    </div>
    <div class="input_control">
        <input type="password" class="form_input" placeholder="密码" name="pwd">
    </div>
    <button class="button" type = "submit" style="vertical-align:middle"><span>登录</span></button>
    </form>

    </td>
    </table>
    </div>
</body>

