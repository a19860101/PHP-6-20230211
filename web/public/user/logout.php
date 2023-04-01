<?php
    include('../../vendor/autoload.php');
    Gjun\Web\Controller\User::logout();
    $webroot = 'http://localhost/php-6-20230211/web/public';
    echo "<script>alert('已登出');</script>";
    header("refresh:0;url={$webroot}/index.php");