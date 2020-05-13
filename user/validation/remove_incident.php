<?php

require "app1.php"; # Checks that app1.ini exists, if not it throws error and ends

$file = "app1.ini"; # sets ini file that should be written to
$data = <<< DATA
[incident]

incident_title = "Operational"
incident_message = "Everything is operational right now!"

incident_color = "aler alert-success"


DATA;

$handle = fopen($file, "w")or die("Couldn't open file!"); # Opens file in write mode, if it couldn't it throws an error
fwrite($handle, $data)or die("Error writing on file!"); # writes to the file, if it couldn't it throws an error too

fclose($handle); # closes the file

header("Location: ../design.php?info=removed_incident"); # redirects with info message

// DO NOT DELETE COPYRIGHT NOTICE BELOW

/* DuckStat OSS by Duck Developing Studio and the OpenDuck Project */
#  2020
?>