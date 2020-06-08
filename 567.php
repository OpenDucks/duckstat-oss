<?php

session_start();

    header("HTTP/1.1 567 DuckStat (\"DDS\") Error");

$ini_location = "user/validation/app3.ini";    
$ini = parse_ini_file($ini_location);
$meta = $_SESSION["error_meta"];
$error_code = $_SESSION["error"];

if($ini["debug"] == "true") {

switch($_SESSION["error"]) {
    case "0":
        $error = "<div style='background-color:lightgrey;'>The software encountered an unknown error and cannot work properly.<br>Please try the following:<br><br>1. Retry what you've wanted to do<br>2. Restart your Webserver<br>3. If everything above doesn't work, please visit our GitHub and create a Issue: <a href='https://github.com/OpenDucks/duckstat-oss/issues'>https://github.com/OpenDucks/duckstat-oss/issues</a></div>";
        break;
    case "1":
        $error = "<div style='background-color:lightgrey;'>An major file is missing in the system, it is required, so DuckStat-OSS can work properly. Missing file: " . $meta["file"] . "</div>";
        break;
    case "2":
        $error = "<div style='background-color:lightgrey;'> The LICENSE-File and/or LICENSE-NOTICE file is missing.<br>File missing: " . $meta["file"] . ".<br>Please redownload the file from GitHub, here is the link to our GitHub: <a href='https://github.com/TheDucky/duckstat-oss'>https://github.com/TheDucky/duckstat-oss</a></div>";
        break;
    default:
        $error = "<div style='background-color:lightgrey;'>Nice try, there's no error, please leave the site.</div>";
        $error_code = "Get outta here.";
        break;
}

} else {

    switch($_SESSION["error"]) {
        case "0":
            $error = "<div style='background-color:lightgrey;'>The software encountered an unknown error.</div>";
            break;
        case "1":
            $error = "<div style='background-color:lightgrey;'>A file is missing.</div>";
            break;
        case "2":
            $error = "<div style='background-color:lightgrey;'>LICENSE missing.</div>";
            break;
        default:
            $error = "<div style='background-color:lightgrey;'>No Error.</div>";
            $error_code = "Please leave :)";
            break;
    };
};
$content = file('VERSION');
?>

<html>
<h1>DDS Error</h1>
<p>The software encountered an error. Description below.</p>
<p><?php print_r($error) ?><br><br><?php echo "Errorcode: " . $error_code ?></p>
<?php
if($ini["debug"] == "true") {
    echo "<b>Debug Mode is <u>enabled</u>.<br>";
};
if($ini["remove_session_error"] == "true") {
    echo "<b>The current session error will be destroyed, reloading the page will result in showing no error.</b><br>";
}
if($ini["save_errors"] == "true") {
    echo "<b>Your Errors will be saved in a log file.</b>";
};
?>
<hr>
<p>Version: <?php echo "<code><b>" . $content[0] . "</b></code>" ?></p>
</html>
<?php
if($ini["remove_session_error"] == "true") {
    session_destroy();
};

?>