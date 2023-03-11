<?php
    // var_dump($_REQUEST);
    // var_dump($_FILES['img']);
    extract($_FILES['img']);

    $img_name = md5(time());
    $ext = pathinfo($name,PATHINFO_EXTENSION);
    $fullname = $img_name.'.'.$ext;

    echo $fullname;
    


    $target = 'images/'.$fullname;


    if($error == 0){
        if(move_uploaded_file($tmp_name,$target)){
            echo '上傳失敗';
        }
    }else{
        echo '上傳錯誤';
    }
    echo '<script>alert("檔案已上傳")</script>';
    header('refresh:1;url=index.php');