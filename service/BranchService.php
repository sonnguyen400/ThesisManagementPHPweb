<?php
    namespace service;
    require_once('../service/Service.php');
    require_once('../model/Branch.php');
    class BranchService extends Service{
        public function findAll(){
            $query=$this->selectQuery("branch");
            return $this->executeSelect($query,'entity\Branch');
        }
        public function findAllByFacultyId($id){
            $query=$this->selectQuery('branch',"faculty_id=$id");
            return $this->executeSelect($query,"entity\Branch");
        }
        public function findById($id){
            $query=$this->selectQuery("branch","id=$id");
            $result= $this->executeSelect($query,"entityBranch");
            if(assert($result)&&count($result)> 0){
                return $result[0];
            }
        }
        public function __construct(){
            
        }
    }
?>