<?php
    namespace Gjun\Web\Controller;
    use PDO;
    use Gjun\Web\Config\DB;
    class User {
        static function store($request){
            extract($request);
            $sql = 'INSERT INTO users(name,email,pw,created_at)VALUES(?,?,?,?)';
            if(User::checkMail($email) != 0){
                return User::checkMail($email);
            }
            try{
                $stmt = DB::pdo()->prepare($sql);
                $pw = password_hash($pw,PASSWORD_DEFAULT);
                $stmt->execute([$name,$email,$pw,DB::now()]);
                return [
                    'errCode' => 0,
                    'status' => '註冊成功，請重新登入'
                ];
            }catch(PDOException $e){
                echo $e->getMessage();
                return [
                    'errCode' => 1,
                    'status' => '註冊失敗'
                ];
            }
        }
        static function checkMail($email){
            $sql = 'SELECT * FROM users WHERE email = ?';
            $stmt = DB::pdo()->prepare($sql);
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
        static function auth($request){
            session_start();
            extract($request);
            $sql = 'SELECT * FROM users WHERE email = ?';
            $stmt = DB::pdo()->prepare($sql);
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
        static function logout(){
            session_start();
            session_destroy();
        }
    }