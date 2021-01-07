<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>注册</title>
    <link rel="stylesheet" href="./css/background.css">
    <style>
        body {
            background: url(./img/qq.jpg);
            margin-top: 10%;
            background-size: cover;
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
<body>

    <div>
    <table align="center">
    <td align="center">
    <div class="title">注册</div>

    <form action="register_ok.php" method="POST">
    <div class="input_control">
        <input type="text" class="form_input" placeholder="用户名" name="uname">
    </div>
    <div class="input_control">
        <input type="password" class="form_input" placeholder="密码" name="pwd">
    </div>
    <div class="input_control">
        <input type="password" class="form_input" placeholder="确认密码" name="cpwd">
    </div>
    <button class="button" type = "submit" style="vertical-align:middle"><span>注册</span></button>
    </form>

    </td>
    </table>
    </div>

</body>
</html>

