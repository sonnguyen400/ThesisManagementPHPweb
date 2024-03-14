<?php
    require_once('../service/Service.php');
    require_once('../model/Employee.php');
    use service\Service;
    use model\Employee;
    class EmployeeService extends Service{
        public function __construct(){

        }
        public function findAll(){
            $query=$this->selectQuery("employee");
            return $this->executeSelect($query,"entity\Employee");
        }
        public function findById($id){
            $query=$this->selectQuery("employee","id=$id");
            return $this->executeSelect($query,"Entity\Employee");
        }
        public function insert($object){
            $query=$this->insertQuery($object);
            return $this->executeInsert($query);
        }

    }
?>