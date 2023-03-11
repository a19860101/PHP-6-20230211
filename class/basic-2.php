<?php
    class User {
        public $name = 'John Doe';
        public function __construct(){
            echo '建構子';
        }
        public function walk(){
            return $this->name.' walk';
        }
        // 靜態方法(不可調用屬性)
        static function attack(){
            return ' Attack!!';
        }
    }


    class Admin extends User {

    }

    // echo User::attack();

    
    $admin = new Admin;
    // $admin->name = 'Administrator';
    // echo $admin->walk();
    // echo $admin->attack();

    // echo Admin::attack();

    $user_1 = new User;
    $user_2 = new User;
    $admin_1 = new Admin;

    echo User::attack();