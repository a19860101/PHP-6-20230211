<?php
    include('db.php');
    extract($_REQUEST);
    $sql = 'UPDATE students SET name=?,email=?,phone=?,edu=?,gender=?,skill=? WHERE id =?';
    $stmt = $pdo->prepare($sql);
    $skill = implode(',',$skill);
    $stmt->execute([$name,$email,$phone,$edu,$gender,$skill,$id]);

    echo '<script>alert("資料已更新");</script>';
    header('refresh:0;url=show.php?id='.$id);