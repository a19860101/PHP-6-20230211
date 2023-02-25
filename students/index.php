<?php
    include('db.php');
    $sql = 'SELECT * FROM students';
    $students = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($students);
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
    <?php foreach($students as $student){ ?>
        <div><?php echo $student['name'];?></div>
    <?php } ?>
</body>
</html>