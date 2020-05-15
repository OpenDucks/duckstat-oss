<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>DuckStat User Area</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Armata">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../assets/css/Features-Blue.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/Header-Blue.css">
    <link rel="stylesheet" href="../assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="../assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="../assets/css/Responsive-feedback-form-1.css">
    <link rel="stylesheet" href="../assets/css/Responsive-feedback-form.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>
    <div>
        <div class="header-blue">
            <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
                <div class="container-fluid"><a class="navbar-brand" href="https://openduck.org">OpenDuck Project</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"></li>
                            <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Menu</a>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Account</a></div>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#site">Site Settings</a></div>
                            </li>
                        </ul>
                        <form class="form-inline mr-auto" target="_self">
                            <div class="form-group"><label for="search-field"></label></div>
                        </form><a class="btn btn-light action-button" role="button" href="validation/logout.php">Sign Out</a></div>
                </div>
            </nav>
            <?php
            ob_start();
            require "validation/app.ini"; # Checks that the file exists, but doesn't execute it
            ob_end_clean();
            session_start();
            require "validation/design_.php"; # Checks that the file exists

            # If 1 of the files above doesn't exist the script doesn't continue and the page is only half loaded

                $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; # Set's the Server URL

                if(strpos($fullurl, "info=loggedin")) { # If the URI contains the following it shows this
                    echo "<div class=\"text-center alert alert-success alert-dismissible fade show\" role=\"alert\">
                    <strong>Info!</strong> You've successfully logged in!
                    <button type\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                      <span aria-hidden\"true\">&times;</span>
                    </button>
                  </div>";
                }
                # Several error codes, that should be clear
                if(strpos($fullurl, "error=notset")) {
                    echo "<p class='btn btn-danger'>Error: One or more of the Statuspage names are not set, please set them!</p>";
                }
                if(strpos($fullurl, "info=success")) {
                    echo "<p class='btn btn-success'>Info: We've successfully saved your Data! Check out your Statuspage!</p>";
                }
                if(strpos($fullurl, "info=removed_incident")) {
                    echo "<p class='btn btn-success'>Info: Successfully removed the incident!</p>";
                }
                if(strpos($fullurl, "info=success_incident")) {
                    echo "<p class='btn btn-success'>Info: Successfully set your Incident</p>";
                }
            ?>
            <h1 class="text-center" style="color: rgb(255,255,255);">Adjust your Statuspage!</h1>
            <form class="text-center" action="validation/validate_statuspage.php" method="POST" id="form1"><div class="form-group text-center">
    <p class="text-center" style="color: rgb(255,255,255);">Status Nr. 1:</p><label style="color:white;padding-right:20px;">Status Nr. 1 Name:  </label><input name="status1_name" type="text" style="text-align: center;" min="2" max="30" placeholder="e.g. 'Website' or 'App'" value="<?php  ?>" required>
    <br>


</div>
            <div class="form-group text-center"><label class="text-center" style="color: rgb(255,255,255);">Status 1:&nbsp;&nbsp;</label><select name="status1_select"><option value="status1_online" selected="">Online</option><option value="status1_offline">Offline</option><option value="status1_recovering">Recovering</option><option value="status1_investigating">Investigating</option><option value="status1_maintenance">Maintenance</option><optgroup label="Other"><option value="status1_closed">Closed</option><option value="status1_overloaded">Overloaded</option><option value="status1_partial_outage">Partial Outage</option><option value="status1_major_outage">Major Outage</option><option value="status1_degraded_performance">Degraded Performance</option></optgroup></select></div>
            <hr
                style="color: rgb(255,0,0);background-color: #ff0000;font-size: 1px;">
                <div class="form-group"><div class="form-group text-center">
    <p class="text-center" style="color: rgb(255,255,255);">Status Nr. 2:</p><label style="color:white;padding-right:20px;">Status Nr. 2 Name:  </label><input name="status2_name" type="text" style="text-align: center;" min="2" max="30" placeholder="e.g. 'API' or 'Log In'" required>
    <br>


</div></div>
                <div class="form-group text-center"><label class="text-center" style="color: rgb(255,255,255);">Status 2:&nbsp;&nbsp;</label><select name="status2_select"><option value="status2_online" selected="">Online</option><option value="status2_offline">Offline</option><option value="status2_recovering">Recovering</option><option value="status2_investigating">Investigating</option><option value="status2_maintenance">Maintenance</option><optgroup label="Other"><option value="status2_closed">Closed</option><option value="status2_overloaded">Overloaded</option><option value="status2_partial_outage">Partial Outage</option><option value="status2_major_outage">Major Outage</option><option value="status2_degraded_performance">Degraded Performance</option></optgroup></select></div>
                <hr
                    style="color: rgb(255,0,0);background-color: #ff0000;font-size: 1px;">
                    <div class="form-group"><div class="form-group text-center">
    <p class="text-center" style="color: rgb(255,255,255);">Status Nr. 3:</p><label style="color:white;padding-right:20px;">Status Nr. 3 Name:  </label><input name="status3_name" type="text" style="text-align: center;" min="2" max="30" placeholder="e.g. 'Server' or 'Streaming'" required>
    <br>


</div></div>
                    <div class="form-group text-center"><label class="text-center" style="color: rgb(255,255,255);">Status 3:&nbsp;&nbsp;</label><select name="status3_select"><option value="status3_online" selected="">Online</option><option value="status3_offline">Offline</option><option value="status3_recovering">Recovering</option><option value="status3_investigating">Investigating</option><option value="status3_maintenance">Maintenance</option><optgroup label="Other"><option value="status3_closed">Closed</option><option value="status3_overloaded">Overloaded</option><option value="status3_partial_outage">Partial Outage</option><option value="status3_major_outage">Major Outage</option><option value="status3_degraded_performance">Degraded Performance</option></optgroup></select></div>
                    <hr
                        style="color: rgb(255,0,0);background-color: #ff0000;font-size: 1px;"><div class="form-group text-center">
    <p class="text-center" style="color: rgb(255,255,255);">Status Nr. 4:</p><label style="color:white;padding-right:20px;">Status Nr. 4 Name:  </label><input name="status4_name" type="text" style="text-align: center;" min="2" max="30" size="25px" placeholder="e.g. 'Network' or 'Webserver'" required>
    <br>


</div>
                        <div class="form-group text-center"><label class="text-center" style="color: rgb(255,255,255);">Status 4:&nbsp;&nbsp;</label><select name="status4_select"><option value="status4_online" selected="">Online</option><option value="status4_offline">Offline</option><option value="status4_recovering">Recovering</option><option value="status4_investigating">Investigating</option><option value="status4_maintenance">Maintenance</option><optgroup label="Other"><option value="status4_closed">Closed</option><option value="status4_overloaded">Overloaded</option><option value="status4_partial_outage">Partial Outage</option><option value="status4_major_outage">Major Outage</option><option value="status4_degraded_performance">Degraded Performance</option></optgroup></select></div>
                        <hr
                            style="color: rgb(255,0,0);background-color: #ff0000;font-size: 1px;"><div class="form-group text-center">
    <p class="text-center" style="color: rgb(255,255,255);">Status Nr. 5:</p><label style="color:white;padding-right:20px;">Status Nr. 5 Name:  </label><input name="status5_name" type="text" style="text-align: center;" min="2" max="40" placeholder="e.g. 'Chat' or 'REST API'" required>
    <br>


            </div>
                            <div class="form-group text-center"><label class="text-center" style="color: rgb(255,255,255);">Status 5:&nbsp;&nbsp;</label><select name="status5_select"><option value="status5_online" selected="">Online</option><option value="status5_offline">Offline</option><option value="status5_recovering">Recovering</option><option value="status5_investigating">Investigating</option><option value="status5_maintenance">Maintenance</option><optgroup label="Other"><option value="status5_closed">Closed</option><option value="status5_overloaded">Overloaded</option><option value="status5_partial_outage">Partial Outage</option><option value="status5_major_outage">Major Outage</option><option value="status5_degraded_performance">Degraded Performance</option></optgroup></select></div>
                            <div
                                class="text-center"><button class="btn btn-primary text-center" type="submit">Apply all Changes!</button>
    </div>
            </form>
            <br>
            <br>
            <hr
                        style="color: rgb(255,0,0);background-color: #ff0000;font-size: 1px;">
                        <br>
            <form class="text-center" action="validation/incidents.php" method="POST" id="form2">
            <h2 style="color:white;">Create Incident</h2><br>
                <label class="text-center" style="color: white;">Incident Title: </label>  <input name="incident_title" type="text" style="text-align: center;" min="2" max="40" placeholder="API Outage" required>
                <br><br>
                <label class="text-center" style="color:white;">Incident Message: </label>  <input name="incident_message" type="text" style="text-align: center"; required>
                <br><br>
                <label class="text-center" style="color:white;">Color: </label><select name="incident_color"><option value="incident_warning" selected>Warning Color (Yellow)</option><option value="incident_danger">Danger Color (Red)</option><option value="incident_success">Operational Color (Green)</option><option value="incident_info">Info Color (Blue)</option><option value="incident_dark">Maintenance Color (Grey)</option></select>
                <br>
                <button class="btn btn-primary text-center" type="submit">Create Incident!</button> <br> <a class="btn btn-dark text-center" href="validation/remove_incident.php">Remove current Incident</a> 
            </form>
<br><br>
<div class="text-center">
            <button class="btn btn-success text-center"onclick="both()">Send both Status Update & Create Incident!</button></div>

            <script> // If the button is clicked, then it submits both forms
                both = function(){
                    document.getElementById("form1").submit();
                    document.getElementById("form2").submit();
                }
            </script>
        </div>
        <h2 class="text-center">Site Settings</h2>
        
        </div>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 item text">
                        <h3>OpenDuck Project</h3> <!--  You can remove this footer, but please show your love to the community and let it stay in here.  -->
                        <p>DuckStat OSS by the OpenDuck Project</p> <!-- You can also outcomment it and put in your own values -->
                    </div>                                      <!--  We hope you love this Open-Source Project  -->
                </div>
                <p class="copyright">Your Name</p>
                <p class="copyright">Made with ❤ in Germany</p>
            </div>
        </footer>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

<!-- DO NOT DELETE COPYRIGHT NOTICE BELOW -->

<!--  DuckStat OSS by Duck Developing Studio and the OpenDuck Project  -->
<!-- 2020 -->
</html>