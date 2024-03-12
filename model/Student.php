<?php
    namespace entity;
    class Student{
        public $id;
        public $school_year;
        public $student_id;
        public $employee_id;
        public function __construct($id,$school_year,$student_id,$employee_id){
            $this->id = $id;
            $this->school_year = $school_year;
            $this->student_id = $student_id;
        }
    }