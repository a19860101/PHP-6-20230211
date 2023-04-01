<?php
    include('../../vendor/autoload.php');
    Gjun\Web\Controller\Post::delete($_REQUEST);

    echo '<script>alert("文章已刪除");</script>';
    header('refresh:0;url=index.php');