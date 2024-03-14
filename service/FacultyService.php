<?php
    namespace service;
    require_once('../service/Service.php');
    require_once('../model/Faculty.php');

    class FacultyService extends Service{
        public function findAll(){
            $query=$this->selectQuery("Faculty");
            return $this->executeSelect($query,"entity\Faculty");
        }
    }
?>