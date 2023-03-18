<?php
    namespace Gjun\Web\Config;
    use PDO;
    class DB {
        static function pdo(){
            $db_host = 'localhost';
            $db_user = 'admin';
            $db_pw = 'admin';
            $db_name = 'php-6-20230211';
            $db_charset = 'utf8mb4';
            
            $dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";
            
            try{   
                $pdo = new PDO($dsn,$db_user,$db_pw);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
            return $pdo;
        }
        static function now(){
            date_default_timezone_set('Asia/Taipei');
            $now = date('Y-m-d H:i:s');
    
            return $now;
        }
    }