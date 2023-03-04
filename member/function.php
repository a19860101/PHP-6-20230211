<?php
    include('db.php');

    function store($request){
        extract($request);
        $sql = 'INSERT INTO users(name,email,pw,created_at)VALUES(?,?,?,?)';
        if(checkMail($email) != 0){
            return checkMail($email);
        }
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
    function checkMail($email){
        $sql = 'SELECT * FROM users WHERE email = ?';
        $stmt = pdo()->prepare($sql);
        $stmt->execute([$email]);
        if($stmt->rowCount() > 0){
            return [
                'errCode' => 9,
                'status' => 'Email重複'
            ];
        }else{
            return 0;
        }
    }
    function auth($request){
        session_start();
        extract($request);
        $sql = 'SELECT * FROM users WHERE email = ?';
        $stmt = pdo()->prepare($sql);
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if(!$user){
            return [
                'errCode' => 3,
                'status' => 'Email帳號不存在，請重新註冊或登入'
            ];
        }
        if(password_verify($pw,$user['pw'])){
            $_SESSION['AUTH'] = $user;
            return [
                'errCode' => 0,
                'status' => '登入成功'
            ];
        }else{
            return [
                'errCode' => 2,
                'status' => '帳號或密碼錯誤'
            ];
        }
    }