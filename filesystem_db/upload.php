<?php
    include('db.php');
    extract($_FILES['img']);
    extract($_REQUEST);

    if($title == ''){
        $title = $name;
    }
     

    $img_name = md5(time());
    $ext = pathinfo($name,PATHINFO_EXTENSION);
    $fullname = $img_name.'.'.$ext;

    $folder = 'images/';

    if(!is_dir($folder)){
        mkdir($folder);
    }

    $target = $folder.$fullname;
    $sql = 'INSERT INTO galleries(title,img_name,created_at)VALUES(?,?,?)';

    switch($error){
        case 0:
            if(move_uploaded_file($tmp_name,$target)){
                $stmt = pdo()->prepare($sql);
                $stmt->execute([$title,$fullname,now()]);
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