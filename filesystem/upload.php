<?php
    // var_dump($_REQUEST);
    // var_dump($_FILES['img']);
    extract($_FILES['img']);

    $img_name = md5(time());
    $ext = pathinfo($name,PATHINFO_EXTENSION);
    $fullname = $img_name.'.'.$ext;

    $folder = 'images/';

    if(!is_dir($folder)){
        mkdir($folder);
    }

    $target = $folder.$fullname;

    switch($error){
        case 0:
            if(move_uploaded_file($tmp_name,$target)){
                echo '<script>alert("檔案已上傳")</script>';
            }else{
                echo '上傳失敗';
            }
            break;
        case 4:
            echo '<script>alert("請選擇檔案")</script>';
            break;

    }

    // if($error == 0){
    //     if(move_uploaded_file($tmp_name,$target)){
    //         echo '上傳失敗';
    //     }
    // }else{
    //     echo '上傳錯誤';
    // }
    
    header('refresh:1;url=index.php');