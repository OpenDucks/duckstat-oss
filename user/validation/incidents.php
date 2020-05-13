<?php

# Sets the incident in the following values

$incident_title = $_POST["incident_title"];
$incident_message = $_POST["incident_message"];
$incident_color = $_POST["incident_color"];
$incident_time = date("d.m.Y | H:i");



if($incident_title == null) { # Checks that there's a Incident title
    header("Location: design.php?error=notset"); # If not, it throws an error
} else {
    switch($incident_color) { # Checks Incident Color for following values
        case "incident_warning":
            $incident_real_color = "alert alert-warning"; // Yellow
            break;
        case "incident_danger":
            $incident_real_color = "alert alert-danger"; // Red
            break;
        case "incident_success":
            $incident_real_color = "alert alert-success"; // Green
            break;
        case "incident_info":
            $incident_real_color = "alert alert-info"; // Blue
            break;
        case "incident_dark":
            $incident_real_color = "alert alert-dark";
            break;
        default:
            $incident_real_color = "alert alert-success"; // If nothing is set, it's automatically Green
            break;
    };

$file = "app1.ini"; // Set's app1.ini as file for incidents
# Set's data that should be written into the app1.ini
$data = <<< DATA
[incidents]

; This file saves the Incident

; incident_title saves the Incident title, e.g "Server outage in Europe"
; incident_message saves the message of the incident, e.g. "Due to a overload of our Servers in Europe they are unreachable at the moment."


; incident_color saves the status of your incident.
; You can choose between:

; alert alert-warning (Yellow)
; alert alert-danger (Red)
; alert alert-success (Green)
; alert alert-info (Blue)
; alert alert-dark
;
; By default it is "alert alert-success" so it's Green!

; incident_time saves the time, when you've created the incident.
; it is saved in the following format: d.m.Y | H:i

incident_title = "$incident_title"
incident_message = "$incident_message"

incident_color = "$incident_real_color"
incident_time = "$incident_time"




# DO NOT DELETE COPYRIGHT NOTICE BELOW

# DuckStat OSS by Duck Developing Studio and the OpenDuck Project
#  2020

DATA;

$handle = fopen($file, "w"); # handles the app1.ini and opens in write mode
fwrite($handle, $data); # Writes into the file

fclose($handle); # Closes file

header("Location: ../design.php?info=success_incident"); # Throws you back to the site and gives success info

};

// DO NOT DELETE COPYRIGHT NOTICE BELOW

/* DuckStat OSS by Duck Developing Studio and the OpenDuck Project */
#  2020
?>