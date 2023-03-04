<?php
    include('db.php');

    function store($request){
        extract($request);
        $sql = 'INSERT INTO users(name,email,pw,created_at)VALUES(?,?,?,?)';
        try{
            $stmt = pdo()->prepare($sql);
            $pw = password_hash($pw,PASSWORD_DEFAULT);
            $stmt->execute([$name,$email,$pw,now()]);
            return [
                'errCode' => 0,
                'status' => '註冊成功'
            ];
        }catch(PDOException $e){
            echo $e->getMessage();
            return [
                'errCode' => 1,
                'status' => '註冊失敗'
            ];
        }
    }