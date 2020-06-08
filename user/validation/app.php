<?php
# Reads the INI File
$ini = parse_ini_file("app.ini");
$ds = $ini["description"];
# Checks if "description" is set, if not it shows an error. If it is set, it sets the values
if($ds == null) {
    echo "<p style='alert alert-danger'>An error occured</p>";
} else {
    $status1 = $ini["status1"];
    $status2 = $ini["status2"];
    $status3 = $ini["status3"];
    $status4 = $ini["status4"];
    $status5 = $ini["status5"];
    $tt1 = $ini["tt1"];
    $tt2 = $ini["tt2"];
    $tt3 = $ini["tt3"];
    $tt4 = $ini["tt4"];
    $tt5 = $ini["tt5"];
    $description = $ini["description"];

};

// DO NOT DELETE COPYRIGHT NOTICE BELOW

/* DuckStat OSS by Duck Developing Studio and the OpenDuck Project */
#  2020
?>

