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
                                            <label>First Name</label>
                                            <input class="input-default form-control" type="text" name="firstname"
                                                placeholder="First Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input class="input-default form-control" type="text" name="lastname"
                                                placeholder="Last Name">
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
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">Authentication</div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" id="" class="input-default form-control">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="phone" name="password" id="" class="input-default form-control">
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
                                    <input type="class" name="faculty" id="" class="input-default form-control">
                                </div>
                                <div class="form-group">
                                    <label>Branch</label>
                                    <input type="class" name="branch" id="" class="input-default form-control">
                                </div>
                                <div class="form-group">
                                    <label>Class</label>
                                    <input type="class" name="email" id="" class="input-default form-control">
                                </div>
                                <div class="form-group">
                                    <label>School year</label>
                                    <input type="text" name="school_year" id="" class="input-default form-control">
                                </div>
                                <div class="form-group">
                                    <label>Student Id</label>
                                    <input type="text" name="student_id" id="" class="input-default form-control">
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">Contact</div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" id="" class="input-default form-control">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="phone" name="phone" id="" class="input-default form-control">
                                </div>
                            </div>
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