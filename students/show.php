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
            <li><?php echo $student['name'];?></li>
            <li><?php echo $student['phone'];?></li>
            <li><?php echo $student['email'];?></li>
            <li><?php echo $student['edu'];?></li>
            <li><?php echo $student['gender'];?></li>
        </ul>
    </div>
</body>
</html>