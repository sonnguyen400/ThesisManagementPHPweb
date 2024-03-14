<?php
use service\BranchService;
    require_once('../model/Account.php');
    require_once('../model/Faculty.php');
    require_once('../Utils/EntityUtils.php');
    require_once('../Utils/Log.php');
    require_once('../service/EmployeeService.php');
    require_once('../service/BranchService.php');
    require_once('../Utils/RequestUtils.php');
use entity\Employee;
use utils\EntityUtils;
use utils\Log;
use utils\RequestUtils;
    $resquestUtils=new RequestUtils();
    $lecturer=$resquestUtils->parse("entity\Account");
    Log::log($lecturer);
?>