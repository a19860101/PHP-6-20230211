<?php
    include('../../vendor/autoload.php');

    $result = Gjun\Web\Controller\File::upload($_REQUEST,$_FILES['img']);

    header('refresh:0;url=index.php');