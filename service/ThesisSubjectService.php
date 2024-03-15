<?php
    namespace service;
    require_once('../service/Service.php');
    require_once('../model/Thesis_Subject.php');
    require_once('../Utils/constant.php');
    class ThesisSubjectService extends Service {
        public function insert($object){
            return $this->executeInsert($object);
        }
        public function findAllByAccountId($account_id){
            $query=$this->selectQuery("thesis_subject","instructor_id=$account_id");
            return $this->executeSelect($query, "entity\Thesis_Subject");
        }
        public function findById($id){
            $query=$this->selectQuery("thesis_subject","id=$id");
            return $this->executeSelect($query, "entity\Thesis_Subject");
        }
        public function findAllPending(){
            $query=$this->selectQuery("thesis_subject","status="+PENDING);
            return $this->executeSelect($query, "entity\Thesis_Subject");
        }
        public function findAllReject(){
            $query=$this->selectQuery("thesis_subject","status="+REJECT);
            return $this->executeSelect($query, "entity\Thesis_Subject");
        }
        public function findAllApproved(){
            $query=$this->selectQuery("thesis_subject","status="+APPROVED);
            return $this->executeSelect($query, "entity\Thesis_Subject");
        }
    }
?>