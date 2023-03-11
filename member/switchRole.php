<?php
    include('function.php');
    $result = switchRole($_REQUEST);

    header('location:index.php');