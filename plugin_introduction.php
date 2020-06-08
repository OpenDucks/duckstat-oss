<?php


$ini = parse_ini_file("user/validation/app3.ini");                                      # Parses INI file

if($ini["plugins"] == "true") {                                                         # Checks that "plugins" is "true" inside of the app3.ini file
    if(file_exists("plugins/") == true) {                                               # Checks that the folder "plugins" exists, if yes, it continues
        if(file_exists("plugins/plugins.php") == true) {                                # Now it checks, that the plugins.php file inside the plugins folder exists.
            include "plugins/plugins.php";                                              # it includes the file to read the variables

            function load_plugins() {                                                   # function to load plugins
                global $plugin;
                foreach($plugin as $na) {
                    include_once $na;
                };
                
            };
            
        } else {
            echo "Missing plugins.php file!\n";
        }
    } else {
        echo "There's no Plugin Folder!\n";
    }
} else {
    echo "Plugins are disabled.";
}

// DO NOT DELETE COPYRIGHT NOTICE BELOW

/* DuckStat OSS by Duck Developing Studio and the OpenDuck Project */
#  2020
?>