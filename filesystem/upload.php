<?php
    // var_dump($_REQUEST);
    // var_dump($_FILES['img']);
    extract($_FILES['img']);

    $target = 'images/'.$name;

    if($error == 0){
        if(move_uploaded_file($tmp_name,$target)){
            echo '上傳失敗';
        }
    }else{
        echo '上傳錯誤';
    }

    header('location:index.php');