<?php
    class User {
        protected $name = 'John';
        public function walk(){
            return $this->name.'walk!!';
        } 
    }

    class Admin extends User {
        public function run(){
            return $this->name.'run!!';
        }
    }

    $user_1 = new User;
    // echo $user_1->name;

    // echo $user_1->walk();

    $admin = new Admin;
    // echo $admin->name;

    echo $admin->run();