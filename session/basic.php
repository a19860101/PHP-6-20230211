<?php
    // 伺服器暫存檔
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="basic-2.php" method="post">
        <input type="text" name="data">
        <input type="submit" value="新增session">
    </form>
    <div>
        您的SESSION為 <?php echo $_SESSION['DATA'];?>
    </div>
</body>
</html>