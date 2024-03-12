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
                <form class="col" action="/" method="post">
                    <h4 class="card-title">List of Thesis Topic</h4>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item thesis-list-item">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="mb-1">This is a Example of Thesis Topic</h5>
                                                <p class="mb-1">This is a Example of Thesis Topic description</p>
                                                <small>This is an example of thesis res</small>
                                            </div>
                                            <div class="col-1">
                                                <a href="http://"></a>
                                                <img src="../images/avatar/1.jpg" alt=""
                                                    class="img-thumbnail rounded-circle ">
                                            </div>
                                            <div class="col-2 d-flex align-items-center">
                                                <button class="btn btn-primary mb-1 d-block mx-auto">Register</button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </form>

                </form>
            </div>
        </div>
    </div>
    <?php
        include '../component/base-script.php';
    ?>

</body>

</html>