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
                <form class="row" action="/" method="post">
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
                                            <h3 class="text-center">John Oliver</h3>
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
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">About thesis</div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="class" name="title" id="" class="input-default form-control">
                                </div>
                                <div class="form-group">
                                    <label>Topic</label>
                                    <input type="class" name="objective" id="" class="input-default form-control">
                                </div>
                                <div class="form-group">
                                    <label>Objective</label>
                                    <input type="class" name="email" id="" class="input-default form-control">
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
                                <textarea class="form-control" name="" id="required" cols="30" rows="5"></textarea>
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
        include '../component/base-script.php';
    ?>

</body>

</html>