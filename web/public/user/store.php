<?php
    include('../../vendor/autoload.php');

    $result = Gjun\Web\Controller\User::store($_REQUEST);

    // echo '<script>alert("會員已註冊，請重新登入");</script>';
    // header('refresh:0;url=login.php');
    extract($result);
    if($errCode == 0){
        echo '<script>alert("'.$status.'");</script>';
        header('refresh:0;url=login.php');
    }else{
        echo '<script>alert("'.$status.'");</script>';
        header('refresh:0;url=register.php');
    }