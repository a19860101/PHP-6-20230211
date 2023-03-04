<?php
    include('function.php');
    $result = store($_REQUEST);
    
    if(isset($result['errCode'])){
        echo $result['errMsg'];
        return;
    }
    if(!isset($result['err'])){
        echo '<script>alert("資料已新增");</script>';
        header('refresh:0;url=index.php');
    }else{
        echo '<script>alert("'.$result['status'].'");</script>';
        header('refresh:0;url=create.php');
    }