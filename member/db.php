<?php
    function pdo(){
        $db_host = 'localhost';
        $db_user = 'admin';
        $db_pw = 'admin';
        $db_name = 'php-6-20230211';
        $db_charset = 'utf8mb4';
        
        // data source name
        $dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";
        
        try{   
            //pdo物件
            $pdo = new PDO($dsn,$db_user,$db_pw);
        }catch(PDOException $e){
            // var_dump($e);
            echo $e->getMessage();
        }
        return $pdo;
    }
    function now(){
        // 設定時區
        date_default_timezone_set('Asia/Taipei');
        // 設定當下時間
        $now = date('Y-m-d H:i:s');

        return $now;
    }

