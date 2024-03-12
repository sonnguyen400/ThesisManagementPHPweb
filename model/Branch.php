<?php
    namespace entity;
    class Branch{
        public $id;
        public $name;
        public $faculty_id;
        public function __construct($id, $name){
            $this->id = $id;
            $this->name = $name;
        }
        public static function newBranchWithFacultyId ( $id, $name,$faculty_id ){
            $obj=new Branch($id,$name);
            $obj->faculty_id = $faculty_id;
            return $obj;
        }
    }