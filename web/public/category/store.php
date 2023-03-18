<?php
    include('../../vendor/autoload.php');
    Gjun\Web\Controller\Category::store($_REQUEST);
    echo '<script>alert("分類已新增");</script>';
    header('refresh:0;url=index.php');