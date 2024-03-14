<?php
use service\AccountService;
    session_start();
    require_once("../service/AccountService.php");
    $accountService=new AccountService();
    
?>
<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="../css/style.css" rel="stylesheet">

</head>

<body class="h-100">
    <?php
        if(isset($_POST['login'])){
            $account=$accountService->authentication($_POST['username'],$_POST['password']);
            if($account===false){
                echo "<div class='alert alert-danger alert-dismissible fade show'>Username or password is invalid</div>";
            }else{
                $_SESSION[CURRENT_LOGIN_ACCOUNT]=$account;
                echo "<div class='alert alert-success alert-dismissible fade show'>Login success</div>";
            }
        }
    ?>
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="index.html">
                                    <h4>Login</h4>
                                </a>

                                <form method="post" action="" class="mt-5 mb-5 login-input">
                                    <div class="form-group">
                                        <input name="username" type="test" class="form-control" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input name="password" type="password" class="form-control"
                                            placeholder="Password">
                                    </div>
                                    <button name="login" class="btn login-form__btn submit w-100">Sign In</button>
                                </form>
                                <p class="mt-5 login-form__footer">Dont have account? <a href="page-register.html"
                                        class="text-primary">Sign Up</a> now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>