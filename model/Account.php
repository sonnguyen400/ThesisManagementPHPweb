<?php
    namespace entity;
    class Account{
        public $id;
        public $firstname;
        public $lastname;
        public $date_of_birth;
        public $email;
        public $phone;
        public $branch_id;
        public $username;
        public $password;
        public $address;
        public $avatar;

        /** transient*/
        public $role;

        public function __construct(){
           
        }
    }