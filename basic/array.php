<?php

    // 陣列
    // $a = array();
    // $a[0] = 'Apple';
    // $a[1] = 'Egg';

    $a = ['Apple','Egg','Fork'];

    // echo $a[0];
    // echo $a[1];
    // echo $a[2];

    // echo $a;
    // print($a);
    // print_r($a);
    // var_dump($a);

    // for($i=0;$i<3;$i++){
    //     echo $a[$i];
    // }
    // foreach($a as $item){
    //     echo $item;
    // }

    // 關聯陣列
    $user = [
        'id' => 1,
        'name' => 'John',
        'mail' => 'asdf@gmail.com'
    ];

    // echo $user['id'];
    // echo $user['name'];
    // echo $user['mail'];
    
    // print_r($user);
    // var_dump($user);

    // 陣列迭代

    // foreach($user as $user_info){
    //     echo $user_info;
    // }

    foreach($user as $key => $value){
        echo "{$key}:{$value}";
        echo "<br>";
    }

?>