<?php

use service\ThesisSubjectService;

use function component\ContactInformation;
use function component\PersionalInformation;

require_once('../Utils/Log.php');
require_once('../service/ThesisSubjectService.php');
require_once('../service/AccountService.php');
require_once('../model/Account.php');
require_once('../Utils/constant.php');
require_once('../Utils/RequestUtils.php');
require_once('../component/personal-information.php');
require_once('../component/contact-information.php');
require_once('../model/Thesis_Subject.php');
$importThesisSubject = false;
if (isset($_POST['add'])) {
    $resquestUtils = new utils\RequestUtils();
    $thesisSubject = $resquestUtils->parse('entity\Thesis_Subject');
    $thesisSubjectService = new service\ThesisSubjectService();
    $importThesisSubject = $thesisSubjectService->insert($thesisSubject) !== false;
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
    <link href="../plugins/sweetalert/css/sweetalert.css" rel="stylesheet">


</head>

<body>
    <?php include '../component/loader.php' ?>
    <div id="main-wrapper">
        <?php
        include '../component/header.php';
        include '../component/sidebar.php';
        ?>
        <div class="content-body">
            <div class="container-fluid mt-3">
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
                                            <label>Adviser</label>
                                            <h3 class="text-center">
                                                <?php echo "$account->lastname $account->firstname "; ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Personal info -->
                        <?php
                        PersionalInformation($account->date_of_birth);
                        ContactInformation($account->email, $account->phone)
                        ?>
                    </div>
                    <div class="col-7">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">About thesis</div>
                                <input name="instructor_id" type="hidden" value="<?php echo $account->id; ?>">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="class" name="title" id="" class="input-default form-control">
                                </div>
                                <div class="form-group">
                                    <label>Topic</label>
                                    <input type="class" name="topic" class="input-default form-control">
                                </div>
                                <div class="form-group">
                                    <label>Objective</label>
                                    <input type="class" name="objective" id="" class="input-default form-control">
                                </div>
                                <div class="form-group">
                                    <label>Scope</label>
                                    <input type="class" name="scope" id="" class="input-default form-control">
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">Requirement</div>
                                <textarea class="form-control" name="requirement" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">Recommendation</div>
                                <textarea class="form-control" name="recommendation" id="" cols="30"
                                    rows="5"></textarea>
                            </div>
                        </div>
                        <div class="card">
                            <button class="btn btn-primary w-100" name="add">Register guiding this thesis</button>
                        </div>
                        <div class="card">
                            <button class="btn btn-outline-danger w-100" name="cancel">Cancel</button>
                        </div>


                    </div>

            </div>

            </form>
        </div>
    </div>
    </div>
    <?php
    echo $importThesisSubject;
    ?>
    <?php
    include '../component/base-script.php';
    ?>
    <script src="../plugins/sweetalert/js/sweetalert.min.js"></script>
    <script>
    $(function() {
        <?php
            if ($importThesisSubject===1) {
                echo ` swal("Hey, Good job !!", "You clicked the button !!", "success");`;
            }else{
                echo `sweetAlert("Oops...", "Hehe went wrong !!", "error");`;
            }
            ?>
    })
    </script>

</body>

</html>