<?php
#require "../../check.php";
# Checks that you are logged in
if(isset($_SESSION["email"]) ==  false) {
    header("Location: login.php?error=invalid");
};


// DO NOT DELETE COPYRIGHT NOTICE BELOW

/* DuckStat OSS by Duck Developing Studio and the OpenDuck Project */
#  2020
?>