<?php
require "../../check.php";
   session_start();
   unset($_SESSION["email"]);
   unset($_SESSION["password"]);
   
   echo 'You have cleaned session';
   header('Refresh: 0; URL = ../login.php?info=loggedout');
   session_unset();
   session_abort();
   session_destroy();

   # Destroys the full session and redirects with info message
   # It literally does everything, so the session is completely destroyed


   // DO NOT DELETE COPYRIGHT NOTICE BELOW

/* DuckStat OSS by Duck Developing Studio and the OpenDuck Project */
#  2020
?>