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
    <style>
        table, td, th {
            border: 1px solid #aaa;
            border-collapse: collapse;
        }
        td,th {
            padding: 10px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>姓名</th>
            <th>電話</th>
            <th>
                詳細資料
            </th>
        </tr>
        <?php foreach($students as $student){ ?>
        <tr>
            <td><?php echo $student['id'];?></td>
            <td><?php echo $student['name'];?></td>
            <td><?php echo $student['phone'];?></td>
            <td><a href="#">詳細資料</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>