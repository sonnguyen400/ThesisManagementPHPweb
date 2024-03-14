<?php

use function component\PersionalInformation;

    require_once('../service/FacultyService.php');
    require_once('../service/AccountService.php');
    require_once('../model/Account.php');
    require_once('../Utils/constant.php');
    require_once('../Utils/RequestUtils.php');
    require_once('../component/personal-information.php');
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
                <div class="row">
                    <div class="col-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="col">
                                    <div class="p-3">
                                        <img style="height:180px"
                                            class="rounded-circle img-fluid img-thumbnail mx-auto d-block"
                                            src="../images/avatar/1.jpg" alt="" srcset="">
                                    </div>
                                    <div class="text-lg font-weight-semi-bold text-center">
                                        Your name
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            PersionalInformation($account->date_of_birth)
                        ?>
                    </div>
                    <div class="col-7">
                        <div class="card">
                            <div class="card-body">
                                <h4>Contact</h4>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <span class="pr-2 font-weight-semi-bold">Email</span>
                                        <span class="text-secondary ">hellohoangson@gmail.com</span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="pr-2 font-weight-semi-bold">Phone</span>
                                        <span class="text-secondary ">0393497961</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php
        include '../component/base-script.php';
    ?>

</body>

</html>