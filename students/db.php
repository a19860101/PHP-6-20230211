<?php
    $db_host = 'localhost';
    $db_user = 'admin';
    $db_pw = 'admin';
    $db_name = 'php-6-20230211';
    $db_charset = 'utf8mb4';

    
    // data source name
    $dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";
    
    //pdo物件
    $pdo = new PDO($dsn,$db_user,$db_pw);
