<?php
    class User {
        // 屬性
        public $name = 'John Doe';
        public $gender = 'Male';

        //方法
        public function walk(){
            return $this->name.' walk!!';
        }
        public function jump(){
            return $this->name.' jump!';
        }
    }

    $user_1 = new User;

    // var_dump($user_1);

    // echo $user_1 -> name;
    // echo $user_1 -> gender;
    $user_1->name = 'Max';
    echo $user_1 -> jump();

    $user_2 = new User;
    $user_2 -> name = 'Mary';
    // echo $user_2 -> name;
    echo $user_2 -> walk();