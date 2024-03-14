<?php
    namespace service;
    use entity\Account_Role;
    require_once('../service/Service.php');
    require_once('../model/AccountRole.php');
    require_once('../Utils/constant.php');
    class AccountRoleService extends Service{
        public function setAccountRole($accountId,$role=STUDENT){
            $accountRole=new Account_Role();
            $accountRole->role_id=$role;
            $accountRole->account_id=$accountId;
            return $this->executeInsert($accountRole);
        }
        public function findAllByAccountId($accountId){
            $role=$this->selectQuery("account_role","account_id=$accountId");
            return $this->executeSelect($role,"entity\Account_Role");
        }

    }
?>