<?php
    include('db.php');
    extract($_REQUEST);
    $sql = "SELECT * FROM students WHERE id = {$id}";
    // $student = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

    $sql = 'SELECT * FROM students WHERE id = ?';
    // 預備陳述式 prepare statement
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $student = $stmt->fetch(PDO::FETCH_ASSOC);
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
        <ul>
            <li>姓名:<?php echo $student['name'];?></li>
            <li>電話:<?php echo $student['phone'];?></li>
            <li>Email:<?php echo $student['email'];?></li>
            <li>學歷:<?php echo $student['edu'];?></li>
            <li>性別:<?php echo $student['gender'];?></li>
            <li>專長:<?php echo $student['skill'];?></li>
        </ul>
        <form action="delete.php" method="post">
            <input type="hidden" name="id" value="<?php echo $student['id'];?>">
            <input type="submit" value="刪除" onclick="return confirm('確認刪除？')">
        </form>

        <!-- <a href="index.php">回上頁</a> -->
        <a href="#" onclick="history.back()">回上頁</a>
    </div>
</body>
</html>