<?php
# Set's email and password into the values
$email = $_POST["email1"];
$password = $_POST["password1"];

if(empty($email) || empty($password)) { # If empty
    header("Location: ../login.php?error=nodata"); # it throws you back with an error
} else {
    if($email == base64_decode("YWRtaW5AYWRtaW4uY29t") && $password == base64_decode("YWRtaW4=")) { # Checks if it equals to the values here, for security measures, read the INI file!
        session_start(); # If yes, it saves your session
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $password;
        $_SESSION["time"] = time();
        header("Location: ../design.php?info=loggedin"); # redirects you to the main page
    } else {
        header("Location: ../login.php?error=invaliddata"); # throws back with error message
    }
};


// DO NOT DELETE COPYRIGHT NOTICE BELOW

/* DuckStat OSS by Duck Developing Studio and the OpenDuck Project */
#  2020
?>