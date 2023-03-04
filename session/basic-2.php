<?php
    session_start();
    $_SESSION['DATA'] = $_REQUEST['data'];
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
    <div>
        您的SESSION為 <?php echo $_SESSION['DATA'];?>
    </div>
    <a href="basic.php">返回</a>
</body>
</html>