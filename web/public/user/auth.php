<?php
    include('../../vendor/autoload.php');
    $result = Gjun\Web\Controller\User::auth($_REQUEST);
    extract($result);
    if($errCode == 0){
        echo "<script>alert('{$status}');</script>";
        header('refresh:0;url=../index.php');
    }else{
        echo "<script>alert('{$status}');</script>";
        header('refresh:0;url=login.php');
    }