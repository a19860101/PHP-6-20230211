<?php
    session_start();
    include('function.php');
    $users = index();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        nav {
            display: flex;
            height: 70px;
            background-color: #ccc;
            align-items: center;
        }
        nav a {
            color: #000;
            text-decoration: none;
            padding-inline: 10px;
        }
        .menu {
            margin-left: auto;
        }
        table {
            width: 600px;
        }
        table,td,th {
            border: 1px solid #999;
            
        }
        td,th {
            padding: 10px;
        }
    </style>
</head>
<body>
    <nav>
        <a href="#">LOGO</a>
        <div class="menu">
            <?php if(!isset($_SESSION['AUTH'])){ ?>
            <span>訪客你好!</span>
            <a href="login.php">登入</a>
            <a href="register.php">註冊</a>
            <?php } ?>
            <?php if(isset($_SESSION['AUTH'])){ ?>
            <span><?php echo $_SESSION['AUTH']['name']; ?>你好</span>
            <a href="logout.php">登出</a>
            <?php } ?>
        </div>
    </nav>
    <table>
        <tr>
            <th>名稱</th>
            <th>Email</th>
            <th>建立日期</th>
            <th>權限</th>
        </tr>
        <?php foreach($users as $user){ ?>
            <tr>
                <td><?php echo $user['name'];?></td>
                <td><?php echo $user['email'];?></td>
                <td><?php echo $user['created_at'];?></td>
                <td>
                    <?php 
                        echo $user['role']==0?'一般會員':'管理員';
                    ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>