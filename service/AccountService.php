<?php
    namespace service;
    require_once('../service/Service.php');
    require_once('../model/Account.php');
    require_once('../service/AccountRoleService.php');
    use service\Service;
    class AccountService extends Service{
        public static $roleService;
        public function __construct() {
            self::$roleService=new AccountRoleService();
        }
        public function findAll(){
            $query=$this->selectQuery("account");
            $accounts=$this->executeSelect($query,'entity\Account');
            
        }
        public function findById($id){
            $query=$this->selectQuery("account","id=$id");
            $result=$this->executeSelect($query,'entity\Account');
            if(count($result)> 0){
                $result[0]->role=self::$roleService->findAllByAccountId($result[0]->id);
                return $result[0];
            }
            return false;
        }
        public function insert($object,$role=STUDENT){
            $id=$this->executeInsert($object);
            if($id!=false){
                self::$roleService->setAccountRole($id,$role);
                return $id;
            }
            return false;
        }
        public function authentication($username,$password){
            $query=$this->selectQuery("account","username='$username'","password='$password'");
            $result=$this->executeSelect($query,"entity\Account");
            if(count($result)== 0) return false;
            return $result[0];
        }
    }
    