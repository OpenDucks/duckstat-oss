<?php
require "../check.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>DuckStat User Area</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Armata">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/Header-Blue.css">
    <link rel="stylesheet" href="../assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="../assets/css/Login-Form-Dark.css">
</head>

<body>
    <div class="login-dark">
        <form method="post" action="validation/login.php">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration">
                <?php
                    $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                    if(strpos($fullurl, "error=invaliddata")) {
                        echo "<p class='lead btn btn-danger'>Attention: The password or email is invalid.</p>";
                    }
                    if(strpos($fullurl, "error=nodata")) {
                        echo "<p  class='lead btn btn-danger'>Attention: You've tried to submit the script without any data given.</p>";
                    }
                    if(strpos($fullurl, "error=invalid")) {
                        echo "<p class='lead btn btn-danger'>Attention: You've tried to access the Admin page, without allowence.</p>";
                    }
                    if(strpos($fullurl, "info=loggedout")) {
                        echo "<p class='lead btn btn-info'>You've successfully logged out!</p>";
                    };
                ?>
                <p class="lead">Please <strong>log in </strong>to DuckStat with your Data.</p><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input class="form-control" type="email" name="email1" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="password1" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div><a class="text-left forgot" href="#">Forgot your email or password?</a>
            <p class="lead text-right">Click <strong>here </strong>to <strong><a href="/register.php">register</a></strong>.</p>
        </form>
    </div>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 item text">
                        <h3>OpenDuck Project</h3> <!-- Modify to your Statuspage Name -->
                        <p>DuckStat OSS by the OpenDuck Project</p>
                    </div>
                </div>
                <p class="copyright">OpenDuck Project</p>
                <p class="copyright">Made with ❤ in Germany</p>
            </div>
        </footer>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
<!-- DO NOT DELETE COPYRIGHT NOTICE BELOW -->

<!--  DuckStat OSS by Duck Developing Studio and the OpenDuck Project  -->
<!-- 2020 -->
</html>