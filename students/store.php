<?php
    include('db.php');
    extract($_REQUEST);

    $sql = 'INSERT INTO students(name,phone,email,edu,gender,skill)VALUES(?,?,?,?,?,?)';
    $stmt = $pdo->prepare($sql);
    $skill = implode(',',$skill);
    $stmt->execute([$name,$phone,$email,$edu,$gender,$skill]);