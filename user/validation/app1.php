<?php
# Reads the INI file
$ini1 = parse_ini_file("app1.ini");

# Sets data in the values as in app1.ini
$inc_title = $ini1["incident_title"];
$inc_message = $ini1["incident_message"];
$inc_color = $ini1["incident_color"];
$inc_time = $ini1["incident_time"];

// DO NOT DELETE COPYRIGHT NOTICE BELOW

/* DuckStat OSS by Duck Developing Studio and the OpenDuck Project */
#  2020
?>