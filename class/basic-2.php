<?php
    class User {
        public $name = 'John Doe';
        public function walk(){
            return $this->name.' walk';
        }
    }


    class Admin extends User {

    }

    $admin = new Admin;
    $admin->name = 'Administrator';
    echo $admin->walk();