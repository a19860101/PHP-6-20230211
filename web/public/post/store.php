<?php
    include('../../vendor/autoload.php');

    Gjun\Web\Controller\Post::store($_REQUEST);

    echo '<script>alert("文章已新增");</script>';
    header('refresh:0;url=index.php');