<?php

$dir = dirname(__FILE__) . "/";


#
#   How it works:
#
#   1. You enter the name of the mod on the left and then you enter the index file and directory on the right, as shown in the example below.
#   2. Head over to "user/validation/app3.ini and set the value "plugins" to "true" to enable plugins
#   3. Create your own Plugin using the pattern as in the "testmod/index.php" file.
#

# All your Plugins should be saved in here
$plugin = [
    "testmod" => "$dir" . "testmod/index.php"
];

// DO NOT DELETE COPYRIGHT NOTICE BELOW

/* DuckStat OSS by Duck Developing Studio and the OpenDuck Project */
#  2020
?>