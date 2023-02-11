<?php
    //$_POST,$_GET,$_REQUEST 
    // print_r($_REQUEST);
    // echo '<br>';
    // echo $_REQUEST['msg'];
    // echo $_REQUEST['mail'];
    function check($input){
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }
    extract($_REQUEST);
    
    if($name == ''){
        echo '請輸入姓名';
    }else{
        echo check($name);
    }

    echo '<br>';
    echo $mail;
    echo '<br>';
    echo $edu;
    echo '<br>';
    if(!$gender){
        echo '請選擇性別';
    }else{
        echo $gender;
    }
    
    echo '<br>';
    // print_r($skill);
    if(!isset($skill)){
        echo '請選擇專長';
    }else{
        echo implode(',',$skill);
    }
    echo '<br>';
    echo $content;
