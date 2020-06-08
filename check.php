<?php
ini_set("log_errors", 1);
ob_start();
require "VERSION"; # requires file, but doesn't execute
ob_end_clean();
$version_f = file('VERSION'); # reads
$host = $_SERVER["HTTP_HOST"]; # server adress
$lc = dirname(__FILE__) . "/";

$plugin_file = parse_ini_file("user/validation/app3.ini");


$time = date("d.m.Y | H:i"); 


# Saves work for me, redirects
function redirect($data, $meta) {
    session_start();
    $_SESSION["error"] = $data;
    $_SESSION["error_meta"] = $meta;
    header("Location: /567.php");
};

############################################################################################################
                                                                                                           #
$path_val = "user/validation"; # just to shorten, lol                                                      #
$files = [                                                                                                 #
   "$lc" . "$path_val/app.ini",                                                                            #
   "$lc" . "$path_val/app.php",                                                                            #
   "$lc" . "$path_val/app1.ini",                                                                           #
   "$lc" . "$path_val/app1.php",                                                                           #
   "$lc" . "$path_val/app3.ini",                                                                           #
   "$lc" . "$path_val/app3.php",                                                                           #
   "$lc" . "$path_val/design_.php",                                                                        #
   "$lc" . "$path_val/incidents.php",                                                                      #
   "$lc" . "$path_val/login.php",                                                                          #
   "$lc" . "$path_val/validate_statuspage.php",                                                            #
                                                                                                           #
    # Next directories                                                                                     #
                                                                                                           #    Error code: 1
    "$lc" . "user/design.php",                                                                             #
    "$lc" . "user/login.php",                                                                              #    Info: Error code 1 specifies, that there is missing
                                                                                                           #    an needed file, so DuckStat can work properly.
    # Main dir                                                                                             #
                                                                                                           #    It simply checks, that all files in $files are
    "$lc" . "index.php",                                                                                   #
    "$lc" . "VERSION"                                                                                      #
];                                                                                                         #
# loops file and saves file, that doesn't exist                                                            #
foreach($files as $file) {                                                                                 #
    if(file_exists($file) == false) {                                                                      #
        $data = "1";                                                                                       #
        $meta[] = array(                                                                                   #
            "file" => "$file",                              #   [0]                                        #
            "version" => "$version_f[0]",                   #   [1]                                        #
            "error" => "Missing File",                      #   [2]                                        #
            "host" => "$host"                               #   [3]                                        #
                                                                                                           #
        );                                                                                                 #
        error_log("[$time] Missing file: $file\n", 3, dirname(__FILE__) . "/logs/log.txt");                        #
       redirect($data, $meta); # calls function                                                            #
    };                                                                                                     #
};                                                                                                         #
############################################################################################################
$license = [
   "$lc" . "/LICENSE",
   "$lc" ."/LICENSE-NOTICE"
];

foreach($license as $lic) {
    if(file_exists($lic) == false) {
        $data = "2";
        $meta = array(
            "file" => "$lic",
            "version" => "$version_f[0]",
            "error" => "LICENSE not found",
            "host" => "$host"
        );
        error_log("[$time] LICENSE-File not found: $lic\n", 3, dirname(__FILE__) . "/logs/log.txt");
        redirect($data, $meta);
    };
};


#############################################
$variables = get_defined_vars(); # get's all variables in file
foreach($variables as $var) {
    if(isset($var) == false) {
        $data = "3";
        $meta = array(
            "variable" => "$var",
            "version" => "$version_f[0]",
            "error" => "Variable unset",
        );
        error_log("[$time] Unset variable: $var\n", 3, dirname(__FILE__) . "/logs/log.txt");
        redirect($data, $meta);
        
    };
};

/*

    The Code below checks: If "plugins" inside the app3.ini is set to "true", if yes
    it will load all plugins, if not, it will do nothing.


*/

if($plugin_file["plugins"] == "true") {
    include_once "plugin_introduction.php";
    load_plugins();
};

// DO NOT DELETE COPYRIGHT NOTICE BELOW

/* DuckStat OSS by Duck Developing Studio and the OpenDuck Project */
#  2020
?>