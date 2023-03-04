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
    </style>
</head>
<body>
    <nav>
        <a href="#">LOGO</a>
        <div class="menu">
            <a href="login.php">登入</a>
            <a href="register.php">註冊</a>
            <a href="logout.php">登出</a>
        </div>
    </nav>
</body>
</html>