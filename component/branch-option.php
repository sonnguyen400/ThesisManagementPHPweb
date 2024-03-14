<?php
    namespace component;
    require_once('../service/BranchService.php');
    use service\BranchService;
    $faculty_id=intval($_GET['faculty_id']);

    $branchService=new BranchService();
    $facultyBranchs=$branchService->findAllByFacultyId($faculty_id);
    foreach ($facultyBranchs as $key => $value) {
        echo "<option value='$value->id' name='branch_id'>$value->name</option>";
    }

?>