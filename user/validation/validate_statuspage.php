<?php
require "../../check.php";
// Name for every status
$status1_name = $_POST["status1_name"];
$status2_name = $_POST["status2_name"];
$status3_name = $_POST["status3_name"];
$status4_name = $_POST["status4_name"];
$status5_name = $_POST["status5_name"];

// The status itself
$status1 = $_POST["status1_select"];
$status2 = $_POST["status2_select"];
$status3 = $_POST["status3_select"];
$status4 = $_POST["status4_select"];
$status5 = $_POST["status5_select"];

// Defines variables for every data to null
$data_status1 = null;
$data_status2 = null;
$data_status3 = null;
$data_status4 = null;
$data_status5 = null;

// Checks, that different status are set, if yes, the script continues, if not, you'll be redirected to the configfile with an error
if(isset($status1_name) == false or isset($status2_name) == false or isset($status3_name) == false or isset($status4_name) == false or isset($status5_name) == false) {
    header("Location: ../design.php?error=notset");
} else {

    // Checks that $status1 is one of the cases, if yes, $data_status1 is set to the given value
    switch($status1) {
        case "status1_online": // 1
            $data_status1 = "Online"; // 2
            break;
        case "status1_offline":
            $data_status1 = "Offline"; // 3
            break;
        case "status1_investigating":
            $data_status1 = "Investigating"; // 4
            break;
        case "status1_recovering":
            $data_status1 = "Recovering"; // 5
            break;
        case "status1_maintenance":
            $data_status1 = "Maintenance"; // 6
            break;
        case "status1_partial_outage":
            $data_status1 = "Partial Outage"; // 8
            break;
        case "status1_major_outage":
            $data_status1 = "Major Outage"; // 9
            break;
        case "status1_closed":
            $data_status1 = "Closed"; // 10
            break;
        default:
            $data_status1 = "Error retrieving Data"; // 12
            break;
    };
 // Checks that $status2 is one of the cases, if yes, $data_status2 is set to the given value
    switch($status2) {
        case "status2_online": // 1_2
            $data_status2 = "Online"; // 2_2
            break;
        case "status2_offline":
            $data_status2 = "Offline"; // 3_2
            break;
        case "status2_investigating":
            $data_status2 = "Investigating"; // 4_2
            break;
        case "status2_recovering":
            $data_status2 = "Recovering"; // 5_2
            break;
        case "status2_maintenance":
            $data_status2 = "Maintenance"; // 6_2
            break;
        case "status2_partial_outage":
            $data_status2 = "Partial Outage"; // 8_2
            break;
        case "status2_major_outage":
            $data_status2 = "Major Outage"; // 9_2
            break;
        case "status2_closed":
            $data_status2 = "Closed"; // 10_2
            break;
        default:
            $data_status2 = "Error retrieving Data"; // 12_2
            break;
    };
     // Checks that $status3 is one of the cases, if yes, $data_status3 is set to the given value
    switch($status3) {
        case "status3_online": // 1_3
            $data_status3 = "Online"; // 2_3
            break;
        case "status3_offline":
            $data_status3 = "Offline"; // 3_3
            break;
        case "status3_investigating":
            $data_status3 = "Investigating"; // 4_3
            break;
        case "status3_recovering":
            $data_status3 = "Recovering"; // 5_3
            break;
        case "status3_maintenance":
            $data_status3 = "Maintenance"; // 6_3
            break;
        case "status3_partial_outage":
            $data_status3 = "Partial Outage"; // 8_3
            break;
        case "status3_major_outage":
            $data_status3 = "Major Outage"; // 9_3
            break;
        case "status3_closed":
            $data_status3 = "Closed"; // 10_3
            break;
        default:
            $data_status3 = "Error retrieving Data"; // 12_3
            break;
    };
     // Checks that $status4 is one of the cases, if yes, $data_status4 is set to the given value
    switch($status4) {
        case "status4_online": // 1_4
            $data_status4 = "Online"; // 2_4
            break;
        case "status4_offline":
            $data_status4 = "Offline"; // 3_4
            break;
        case "status4_investigating":
            $data_status4 = "Investigating"; // 4_4
            break;
        case "status4_recovering":
            $data_status4 = "Recovering"; // 5_4
            break;
        case "status4_maintenance":
            $data_status4 = "Maintenance"; // 6_4
            break;
        case "status4_partial_outage":
            $data_status4 = "Partial Outage"; // 8_4
            break;
        case "status4_major_outage":
            $data_status4 = "Major Outage"; // 9_4
            break;
        case "status4_closed":
            $data_status4 = "Closed"; // 10_4
            break;
        default:
            $data_status4 = "Error retrieving Data"; // 12_4
            break;
    };
     // Checks that $status5 is one of the cases, if yes, $data_status5 is set to the given value
    switch($status5) {
        case "status5_online": // 1_5
            $data_status5 = "Online"; // 2_5
            break;
        case "status5_offline":
            $data_status5 = "Offline"; // 3_5
            break;
        case "status5_investigating":
            $data_status5 = "Investigating"; // 4_5
            break;
        case "status5_recovering":
            $data_status5 = "Recovering"; // 5_5
            break;
        case "status5_maintenance":
            $data_status5 = "Maintenance"; // 6_5
            break;
        case "status5_partial_outage":
            $data_status5 = "Partial Outage"; // 8_5
            break;
        case "status5_major_outage":
            $data_status5 = "Major Outage"; // 9_5
            break;
        case "status5_closed":
            $data_status5 = "Closed"; // 10_5
            break;
        default:
            $data_status5 = "Error retrieving Data"; // 12_5
            break;
    };
};

// File that's going to be used
$file = "app.ini";

// Changes to the statuspage
$data = <<< DATA

[status]

; Description of your Statuspage must be set, but is not displayed!
description = "Your site will be saved here!"

; The name of your Statuspage will not be displayed! It's saved in another file
statuspage_name = "$company_name";

; Below you can setup your 5 status slots
; status1-5 is the status value like "Offline" or "Online"
; tt1-5 is the status name, like "API" or "Webserver"
; For status1-5 you can choose from the following values:
;
; Online         |  displays "Online"
; Offline        |  displays "Offline"
; Investigating  |  displays "Investigating"
; Recovering     |  displays "Recovering"
; Maintenance    |  displays "Maintenance"
; Partial Outage |  displays "Partial Outage"
; Major Outage   |  displays "Major Outage"
; Closed         |  displays "Closed"

; The default is "Error retrieving Data"


; Example:
;
; [status1]
;
; status1 = "Offline"
; tt1 = "API"

[status1]

status1 = "$data_status1"
tt1 = "$status1_name"

[status2]

status2 = "$data_status2"
tt2 = "$status2_name"

[status3]

status3 = "$data_status3"
tt3 = "$status3_name"

[status4]

status4 = "$data_status4"
tt4 = "$status4_name"

[status5]

status5 = "$data_status5"
tt5 = "$status5_name"



; DO NOT DELETE COPYRIGHT NOTICE BELOW

; DuckStat OSS by Duck Developing Studio and the OpenDuck Project
;  2020

DATA;

$handle = fopen($file, "w")or die("Couldn't open file: " . $file); // Opens the file for writing, if it couldn't it throws an error
fwrite($handle, $data)or die("Couldn't write file: " . $file); // Writes to the file, if it couldn't an error occurs

fclose($handle); // Closes the file

header("Location: ../design.php?info=success"); // Redirects to the main site with an info

// :)


// DO NOT DELETE COPYRIGHT NOTICE BELOW

/* DuckStat OSS by Duck Developing Studio and the OpenDuck Project */
#  2020
?>