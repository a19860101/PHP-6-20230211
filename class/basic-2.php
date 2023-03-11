<?php
    class User {
        public $name = 'John Doe';
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

    
    // $admin = new Admin;
    // $admin->name = 'Administrator';
    // echo $admin->walk();
    // echo $admin->attack();
    
    echo Admin::attack();