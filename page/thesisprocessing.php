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
                <div class="row">
                    <div class="col-7">
                        <div class="tlc">
                            <ul class="tl">
                                <li class="tl-item">
                                    <div class="tl-card">
                                        <h4>09:00 AM</h4>
                                        <p>Alarm !!!! ⏰ <br> Hi wake up time to go to office.</p>
                                    </div>
                                </li>
                                <li class="tl-item">
                                    <div class="tl-card">
                                        <h4>09:00 AM</h4>
                                        <p>Turned off the alarm and went to sleep 😴😴</p>
                                    </div>
                                </li>


                            </ul>
                        </div>
                    </div>
                    <div class="col-5">

                    </div>


                </div>

                </form>
            </div>
        </div>
    </div>
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
    <script>
    try {
        fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", {
            method: 'HEAD',
            mode: 'no-cors'
        })).then(function(response) {
            return true;
        }).catch(function(e) {
            var carbonScript = document.createElement("script");
            carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CE7DC2JW&placement=wwwcssscriptcom";
            carbonScript.id = "_carbonads_js";
            document.getElementById("carbon-block").appendChild(carbonScript);
        });
    } catch (error) {
        console.log(error);
    }
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LLWL5N9CSM"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-LLWL5N9CSM');
    </script>

</body>

</html>