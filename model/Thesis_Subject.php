<?php
    namespace entity;
    class Thesis_Subject{
        public $id;
        public $title;
        public $topic;
        public $desc;
        public $objective;
        public $requirement;
        public $recommendation;
        public $scope;
        public $instructor_id;
        //Transient
        public $account;
        //transient
        public $thesis_registration;
    }
?>