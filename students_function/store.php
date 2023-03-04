<?php
    include('db.php');
    extract($_REQUEST);

    $sql = 'INSERT INTO students(name,phone,email,edu,gender,skill)VALUES(?,?,?,?,?,?)';
    $stmt = $pdo->prepare($sql);
    $skill = implode(',',$skill);
    $stmt->execute([$name,$phone,$email,$edu,$gender,$skill]);

    // header('location:index.php');

    echo '<script>alert("資料已新增");</script>';
    header('refresh:0;url=index.php');