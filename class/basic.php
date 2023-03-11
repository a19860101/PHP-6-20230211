<?php
    class User {
        // 屬性
        public $name = 'John Doe';
        public $gender = 'Male';
    }

    $user_1 = new User;

    // var_dump($user_1);

    echo $user_1 -> name;
    echo $user_1 -> gender;

    $user_2 = new User;
    $user_2 -> name = 'Mary';
    echo $user_2 -> name;