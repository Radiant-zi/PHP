<?php

    include 'conn/connect_db.php';

    if (!isset($_COOKIE['id'])) {//判断cookie是否到时间限制,如果没到时间限制，就不发生变化，如果到了时间，则弹到index页面
        echo "<script>location.href='index.php'</script>";
    }
    
    $uid = $_COOKIE['id'];//取cookie中的值，即为$id，即标识不同用户id
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <title>通讯录管理系统</title>
    <link rel="stylesheet" href="./css/home.css">
</head>

<body>

    <div class="topnav">
    <a class="active" href="home.php">通讯录列表</a>
    <a href="user.php">个人中心</a>
    <a href="logout.php">注销</a>
    <form method="POST">
    <input type="text" placeholder="搜索.."aria-label="Search" name="search">
    </form>
    </div>


    <div class="container">
        <table border="1">   
            <th>姓名</th>
            <th>性别</th>
            <th>地址</th>
            <th>号码</th>
            <th>QQ</th>
            <th>生日</th>
            <th>手机</th>
            <tbody>
                <?php
                    $sql = "SELECT id, name, sex, address, number, qq, birth, phone FROM list where uid=$uid";//查询符合的数据,uid标识不同用户的数据
                    
                    if (isset($_POST['search'])) {//判断是否有搜索选项
                        $s = $_POST['search'];
                        $sql = "SELECT id, name, sex, address, number, qq, birth, phone FROM list where uid=$uid and (name='$s' or address like '%$s%' or sex='$s')";
                    }

                    $result = mysqli_query($conn,$sql);//执行sql语句

                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {//逐行获取记录

                            $id = $row['id'];
                            $name = $row['name'];
                            $sex = $row['sex'];
                            $address = $row['address'];
                            $number = $row['number'];
                            $qq = $row['qq'];
                            $birth = $row['birth'];
                            $phone = $row['phone'];

                            echo "
                                <tr>
                                    <td>$name</td>
                                    <td>$sex</td>
                                    <td>$address</td>
                                    <td>$number</td>
                                    <td>$qq</td>
                                    <td>$birth</td>
                                    <td>$phone</td>
                                    <td>
                                        <button onclick=\"location.href='edit.php?id=$id&name=$name&sex=$sex&address=$address&number=$number&qq=$qq&birth=$birth&phone=$phone'\">编辑</button>

                                        <button onclick=\"location.href='delete.php?id=$id'\">删除</button>
                                    </td>
                                </tr>";
                        }
                    }
                    else {
                        echo "<tr><td colspan='5'>没有符合条件的联系人 或 目前还没有添加联系人</td></tr>";//colspan='5'表示五个表格列被合并
                    }

                    mysqli_close($conn);
                ?>
                <tr>
                    <form action="add.php" method="POST">
                        <td>
                            <input name="name">
                        </td>
                        <td>
                            <select  name="sex">
                                <option value="男"></option>
                                <option value="男">男</option>
                                <option value="女">女</option>
                                <option value="其他">其他</option>
                            </select>
                        </td>
                        <td>
                            <input  name="address">
                        </td>
                        <td>
                            <input  type = "number" name="number">
                        </td>
                        <td>
                            <input  type = "number" name="qq">
                        </td>
                        <td>
                            <input  type = "number" name="birth">
                        </td>
                        <td>
                            <select name="phone">
                                <option value="手机"></option>
                                <option value="手机">手机</option>
                                <option value="单位">单位</option>
                                <option value="住宅">住宅</option>
                                <option value="传真">传真</option>
                                <option value="其他">其他</option>
                            </select>
                        </td>
                        <td>
                            <button type="submit">添加联系人</button>
                        </td>
                    </form>
                </tr>

            </tbody>
        </table>
    </div>
</body>
</html>