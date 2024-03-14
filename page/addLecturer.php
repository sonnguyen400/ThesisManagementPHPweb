<?php
    require_once('../service/FacultyService.php');
    require_once('../service/AccountService.php');
    require_once('../model/Account.php');
    require_once('../Utils/constant.php');
    require_once('../Utils/RequestUtils.php');
    $facultyService=new service\FacultyService();
    if(isset($_POST['add'])){
        $resquestUtils=new utils\RequestUtils();
        $accountService=new service\AccountService();
        $accountService->insert($resquestUtils->parse('entity\Account'),EMPLOYEE);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Home</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    <script>
    function showFacultyBranch(faculty_id) {
        if (faculty_id) {

        }
    }
    </script>
</head>

<body>
    <?php include '../component/loader.php'?>
    <div id="main-wrapper">
        <?php
            include '../component/header.php';
            include '../component/sidebar.php';
        ?>
        <div class="content-body">
            <div class="container-fluid mt-3">
                <div class="row pb-4 d-flex justify-content-end px-3">
                    <a class="btn text-white bg-green-600 d-flex align-items-center">
                        <i class="fi fi-ss-file-excel text-md mr-2"></i>
                        Import Lecturer
                    </a>
                </div>
                <form class="row" action="" method="post">
                    <div class="col-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="col">
                                    <div class="p-3">
                                        <img style="height:180px"
                                            class="rounded-circle img-fluid img-thumbnail mx-auto d-block"
                                            src="../images/avatar/1.jpg" alt="" srcset="">
                                    </div>
                                    <div>
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input class="input-default form-control" type="text" name="firstname"
                                                placeholder="First Name"
                                                value="<?php echo $_POST!=null&&$_POST['firstname']!=null?$_POST['firstname']:"";?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input class="input-default form-control" type="text" name="lastname"
                                                placeholder="Last Name"
                                                value="<?php echo $_POST!=null&&$_POST['lastname']!=null?$_POST['lastname']:"";?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">Information</div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <input type="date" name="date_of_birth" id=""
                                            class="input-default form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select name="gender" class="input-default form-control">
                                            <option value="Male"
                                                <?php echo $_POST!=null&&$_POST['gender']!=="Male"?"selected":"";?>>
                                                Male
                                            </option>
                                            <option value="Female"
                                                <?php echo $_POST!=null&&$_POST['gender']!=="Female"?"selected":"";?>>
                                                Female
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">Authentication</div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" id="" class="input-default form-control"
                                        value="<?php echo $_POST!=null&&$_POST['username']!=null?$_POST['username']:"";?>">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="phone" name="password" id="" class="input-default form-control"
                                        value="<?php echo $_POST!=null&&$_POST['password']!=null?$_POST['password']:"";?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">Study</div>
                                <div class="form-group">
                                    <label>Faculty</label>
                                    <select name="faculty_id" id="facultyselect" class="input-default form-control">
                                        <?php
                                            $faculties=$facultyService->findAll();
                                            foreach ($faculties as $key => $value) {
                                                echo "<option value='$value->id'>$value->name</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Branch</label>
                                    <select name="branch_id" id="selectBranch" class="input-default form-control">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Qualification</label>
                                    <select name="qualification" class="input-default form-control">
                                        <option value="<?php echo PRO;?>"><?php echo PRO;?></option>
                                        <option value="<?php echo DOC?>"><?php echo DOC?></option>
                                        <option value="<?php echo MASTER?>"><?php echo MASTER?></option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>School year</label>
                                    <input type="text" name="school_year" id="" class="input-default form-control"
                                        value="<?php echo $_POST!=null&&$_POST['school_year']!=null?$_POST['school_year']:"";?>">
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">Contact</div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" id="" class="input-default form-control"
                                        value="<?php echo $_POST!=null&&$_POST['email']!=null?$_POST['email']:"";?>">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="phone" name="phone" id="" class="input-default form-control"
                                        value="<?php echo $_POST!=null&&$_POST['phone']!=null?$_POST['phone']:"";?>">
                                </div>
                            </div>
                        </div>
                        <div class="pb-4">
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-outline-danger w-100" name="cancel">Cancel</button>
                                </div>
                                <div class="col">
                                    <button class="btn btn-primary w-100" name="add">Add</button>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <button type="reset" class="btn btn-success text-white w-100">Reset</button>
                        </div>

                    </div>

            </div>

            </form>
        </div>
    </div>
    </div>
    <?php
        include '../component/base-script.php';
    ?>
    <script>
    $(function() {
        function facultyBranches(facultyId) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    $("#selectBranch").html(this.responseText);
                }
            };
            xmlhttp.open("GET", "../component/branch-option.php?faculty_id=" + facultyId, true);
            xmlhttp.send();
        }
        facultyBranches(1);
        $("#facultyselect").on("change", function(e) {
            facultyBranches(e.target.value);
        });
    })
    </script>
</body>

</html>