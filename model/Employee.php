<?php
    namespace entity;
    class Branch{
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

        public function __construct($id,$branch_id,$firstname,$lastname,$date_of_birth,$email,$phone,$address,$username,$password, $avatar){
            $this->id = $id;
            $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->date_of_birth = $date_of_birth;
            $this->email = $email;
            $this->phone = $phone;
            $this->address = $address;
            $this->avatar = $avatar;
            $this->branch_id = $branch_id;
            $this->username = $username;
            $this->password = $password;
        }
    }