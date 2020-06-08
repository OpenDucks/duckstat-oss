<?php

$plugin_file = parse_ini_file("user/validation/app3.ini");

if($plugin_file["plugins"] == "true") {
    include_once "plugin_introduction.php";
    load_plugins();
};

?>