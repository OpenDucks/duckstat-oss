<!DOCTYPE html>
<?php
# Checks that the files exist, if not, it throws an error and stops the script
require "user/validation/app.php";
require "user/validation/app1.php";
require "user/validation/app3.php";

# Checks all values
switch($status1) {
    case "Online":
        $color1 = "table-success";
        $icon1 = "fa fa-check";
        $text1 = "Online";
        break;
    case "Investigating":
        $color1 = "table-warning";
        $icon1 = "fa fa-search-plus";
        $text1 = "Investigating";
        break;
    case "Recovering":
        $color1 = "table-info";
        $icon1 = "fa fa-repeat";
        $text1 = "Recovering";
        break;
    case "Offline":
        $color1 = "table-danger";
        $icon1 = "fa fa-remove";
        $text1 = "Offline";
        break;
    case "Maintenance":
        $color1 = "table-info";
        $icon1 = "fa fa-gear";
        $text1 = "Maintenance";
        break;
    // Other Cases
    case "Closed":
        $color1 = "table-danger";
        $icon1 = "fa fa-power-off";
        $text1 = "Closed";
        break;
    case "Partial Outage";
        $color1 = "table-warning";
        $icon1 = "fa fa-signal";
        $text1 = "Partial Outage";
        break;
    case "Major Outage":
        $color1 = "table-danger";
        $icon1 = "fa fa-remove";
        $text1 = "Major Outage";
        break;
    case "Degraded Performance":
        $color1 = "table-warning";
        $icon1 = "fa fa-warning";
        $text1 = "Degraded Performance";
        break;
    case "Overloaded":
        $color1 = "table-warning";
        $icon1 = "fa fa-tasks";
        $text1 = "Overloaded";
        break;
    default:
        $color1 = "table-danger";
        $icon1 = "fa fa-remove";
        $text1 = "Error fetching data!";
        break;
};

switch($status2) {
    case "Online":
        $color2 = "table-success";
        $icon2 = "fa fa-check";
        $text2 = "Online";
        break;
    case "Investigating":
        $color2 = "table-warning";
        $icon2 = "fa fa-search-plus";
        $text2 = "Investigating";
        break;
    case "Recovering":
        $color2 = "table-info";
        $icon2 = "fa fa-repeat";
        $text2 = "Recovering";
        break;
    case "Offline":
        $color2 = "table-danger";
        $icon2 = "fa fa-remove";
        $text2 = "Offline";
        break;
    case "Maintenance":
        $color2 = "table-info";
        $icon2 = "fa fa-gear";
        $text2 = "Maintenance";
        break;
    // Other Cases
    case "Closed":
        $color2 = "table-danger";
        $icon2 = "fa fa-power-off";
        $text2 = "Closed";
        break;
    case "Partial Outage";
        $color2 = "table-warning";
        $icon2 = "fa fa-signal";
        $text2 = "Partial Outage";
        break;
    case "Major Outage":
        $color2 = "table-danger";
        $icon2 = "fa fa-remove";
        $text2 = "Major Outage";
        break;
    case "Degraded Performance":
        $color2 = "table-warning";
        $icon2 = "fa fa-warning";
        $text2 = "Degraded Performance";
        break;
    case "Overloaded":
        $color2 = "table-warning";
        $icon2 = "fa fa-tasks";
        $text2 = "Overloaded";
        break;
    default:
        $color2 = "table-danger";
        $icon2 = "fa fa-remove";
        $text2 = "Error fetching data!";
        break;
};
switch($status3) {
    case "Online":
        $color3 = "table-success";
        $icon3 = "fa fa-check";
        $text3 = "Online";
        break;
    case "Investigating":
        $color3 = "table-warning";
        $icon3 = "fa fa-search-plus";
        $text3 = "Investigating";
        break;
    case "Recovering":
        $color3 = "table-info";
        $icon3 = "fa fa-repeat";
        $text3 = "Recovering";
        break;
    case "Offline":
        $color3 = "table-danger";
        $icon3 = "fa fa-remove";
        $text3 = "Offline";
        break;
    case "Maintenance":
        $color3 = "table-info";
        $icon3 = "fa fa-gear";
        $text3 = "Maintenance";
        break;
    // Other Cases
    case "Closed":
        $color3 = "table-danger";
        $icon3 = "fa fa-power-off";
        $text3 = "Closed";
        break;
    case "Partial Outage";
        $color3 = "table-warning";
        $icon3 = "fa fa-signal";
        $text3 = "Partial Outage";
        break;
    case "Major Outage":
        $color3 = "table-danger";
        $icon3 = "fa fa-remove";
        $text3 = "Major Outage";
        break;
    case "Degraded Performance":
        $color3 = "table-warning";
        $icon3 = "fa fa-warning";
        $text3 = "Degraded Performance";
        break;
    case "Overloaded":
        $color3 = "table-warning";
        $icon3 = "fa fa-tasks";
        $text3 = "Overloaded";
        break;
    default:
        $color3 = "table-danger";
        $icon3 = "fa fa-remove";
        $text3 = "Error fetching data!";
        break;
};
switch($status4) {
    case "Online":
        $color4 = "table-success";
        $icon4 = "fa fa-check";
        $text4 = "Online";
        break;
    case "Investigating":
        $color4 = "table-warning";
        $icon4 = "fa fa-search-plus";
        $text4 = "Investigating";
        break;
    case "Recovering":
        $color4 = "table-info";
        $icon4 = "fa fa-repeat";
        $text4 = "Recovering";
        break;
    case "Offline":
        $color4 = "table-danger";
        $icon4 = "fa fa-remove";
        $text4 = "Offline";
        break;
    case "Maintenance":
        $color4 = "table-info";
        $icon4 = "fa fa-gear";
        $text4 = "Maintenance";
        break;
    // Other Cases
    case "Closed":
        $color4 = "table-danger";
        $icon4 = "fa fa-power-off";
        $text4 = "Closed";
        break;
    case "Partial Outage";
        $color4 = "table-warning";
        $icon4 = "fa fa-signal";
        $text4 = "Partial Outage";
        break;
    case "Major Outage":
        $color4 = "table-danger";
        $icon4 = "fa fa-remove";
        $text4 = "Major Outage";
        break;
    case "Degraded Performance":
        $color4 = "table-warning";
        $icon4 = "fa fa-warning";
        $text4 = "Degraded Performance";
        break;
    case "Overloaded":
        $color4 = "table-warning";
        $icon4 = "fa fa-tasks";
        $text4 = "Overloaded";
        break;
    default:
        $color4 = "table-danger";
        $icon4 = "fa fa-remove";
        $text4 = "Error fetching data!";
        break;
};
switch($status5) {
    case "Online":
        $color5 = "table-success";
        $icon5 = "fa fa-check";
        $text5 = "Online";
        break;
    case "Investigating":
        $color5 = "table-warning";
        $icon5 = "fa fa-search-plus";
        $text5 = "Investigating";
        break;
    case "Recovering":
        $color5 = "table-info";
        $icon5 = "fa fa-repeat";
        $text5 = "Recovering";
        break;
    case "Offline":
        $color5 = "table-danger";
        $icon5 = "fa fa-remove";
        $text5 = "Offline";
        break;
    case "Maintenance":
        $color5 = "table-info";
        $icon5 = "fa fa-gear";
        $text5 = "Maintenance";
        break;
    // Other Cases
    case "Closed":
        $color5 = "table-danger";
        $icon5 = "fa fa-power-off";
        $text5 = "Closed";
        break;
    case "Partial Outage";
        $color5 = "table-warning";
        $icon5 = "fa fa-signal";
        $text5 = "Partial Outage";
        break;
    case "Major Outage":
        $color5 = "table-danger";
        $icon5 = "fa fa-remove";
        $text5 = "Major Outage";
        break;
    case "Degraded Performance":
        $color5 = "table-warning";
        $icon5 = "fa fa-warning";
        $text5 = "Degraded Performance";
        break;
    case "Overloaded":
        $color5 = "table-warning";
        $icon5 = "fa fa-tasks";
        $text5 = "Overloaded";
        break;
    default:
        $color5 = "table-danger";
        $icon5 = "fa fa-remove";
        $text5 = "Error fetching data!";
        break;
};

switch($incident) {

};


?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $statuspage_title ?></title>
    <meta property="og:type" content="website">
    <meta name="description" content="DuckStat is a free Statuspage Service!
">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/Beautiful-Modern-Looking-Pricing.css">
    <link rel="stylesheet" href="assets/css/clean-responsive-pricing-1.css">
    <link rel="stylesheet" href="assets/css/clean-responsive-pricing.css">
    <link rel="stylesheet" href="assets/css/Effective-Pricing-Cards.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Header-Blue-1.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Navigation-Dark-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-Menu.css">
    <link rel="stylesheet" href="assets/css/Newsletter-Subscription-Form.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/Pricing-Grid.css">
    <link rel="stylesheet" href="assets/css/Pricing-Table-Style-01-1.css">
    <link rel="stylesheet" href="assets/css/Pricing-Table-Style-01.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/System-Status.css">
</head>

<body>
    <div class="bg-gray padding-50">
        <div class="container" id="system-status">
            <h1 class="text-center"><?php echo $statuspage_title ?></h1>
            
            <p class="text-center">as of <strong><?php echo date("H:i") . " Time MEST" ?></strong></p>
            <div class="<?php echo $inc_color ?>" role="alert">
            <h4 class="alert-heading"><?php echo $inc_title ?></h4>
            <p><?php echo $inc_message ?></p>
            <hr>
            <p class="mb-0"><?php if($inc_time == null) { echo date("d.m.Y | H:i");} else { echo $inc_time; }; ?></p>
        </div>
            <div class="system-status">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-left">Overview </h2>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="<?php echo $color1 ?>"><?php echo $tt1 ?> </td>
                                        <td class="<?php echo $color1 ?>"><i class="<?php echo $icon1 ?>"></i><?php echo $text1 ?></td>
                                    </tr>
                                    <tr>
                                        <td class="<?php echo $color2 ?>"><?php echo $tt2 ?> </td>
                                        <td class="<?php echo $color2 ?>"><i class="<?php echo $icon2 ?>"></i><?php echo $text2 ?></td>
                                    </tr>
                                    <tr>
                                        <td class="<?php echo $color3 ?>"><?php echo $tt3 ?> </td>
                                        <td class="<?php echo $color3 ?>"><i class="<?php echo $icon3 ?>"></i><?php echo $text3 ?></td>
                                    </tr>
                                    <tr>
                                        <td class="<?php echo $color4 ?>"><?php echo $tt4 ?> </td>
                                        <td class="<?php echo $color4 ?>"><i class="<?php echo $icon4 ?>"></i><?php echo $text4 ?></td>
                                    </tr>
                                    <tr>
                                        <td class="<?php echo $color5 ?>"><?php echo $tt5 ?> </td>
                                        <td class="<?php echo $color5 ?>"><i class="<?php echo $icon5 ?>"></i><?php echo $text5 ?></td>
                                    </tr>
                                    <!--<tr>
                                        <td class="<?php echo $color1 ?>"><?php echo $tt1 ?> </td>
                                        <td class="<?php echo $color1 ?>"><i class="<?php echo $icon1 ?>"></i><?php echo $text1 ?></td>
                                    </tr>
                                    <tr>
                                        <td class="<?php echo $color1 ?>"><?php echo $tt1 ?> </td>
                                        <td class="<?php echo $color1 ?>"><i class="<?php echo $icon1 ?>"></i><?php echo $text1 ?></td>
                                    </tr>
                                    <tr>
                                        <td class="<?php echo $color1 ?>"><?php echo $tt1 ?> </td>
                                        <td class="<?php echo $color1 ?>"><i class="<?php echo $icon1 ?>"></i><?php echo $text1 ?></td>-->
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2>Real-time Incidents:</h2>
                        <div class="card">
                            <div class="card-body <?php echo $inc_color ?>">
                                <h3 class="<?php echo $inc_color ?>"><i class="fa fa-check" hidden></i><?php echo $inc_title ?> </h3>
                                <p class="<?php echo $inc_color ?>"><?php echo $inc_title ?></p>
                                <div class="latest-update-timestamp"><span><strong><?php echo $inc_time ?></strong></span></div>
                            </div>
                       <!-- </div>
                        <div class="card">
                            <div class="card-body sr-only">
                                <h3><i class="fa fa-check"></i>Web Server</h3>
                                <div class="latest-update-timestamp"><span><strong>February 3, 2017 @ 9:35 PM MST</strong></span></div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body" style="background-color: #bee5eb;">
                                <h3 style="background-color: #bee5eb;"><i class="fa fa-repeat"></i>Datacenter (East)</h3>
                                <p style="background-color: #bee5eb;">Issues previously reported have been resolved. Datacenter should be available shortly.</p>
                                <div class="latest-update-timestamp"><span><strong>February 3, 2017 @ 9:45 PM MST</strong></span></div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body" style="background-color: #f5c6cb;">
                                <h3 style="background-color: rgb(245,198,203);"><i class="fa fa-remove"></i>Datacenter (West)</h3>
                                <p style="background-color: #f5c6cb;">System unavailable. Technicians have been notified and are working quickly to resolve the issue. Thank you for your patience.</p>
                                <div class="latest-update-timestamp"><span><strong>February 3, 2017 @ 9:49 PM MST</strong></span></div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body sr-only">
                                <h3><i class="fa fa-check"></i>Network</h3>
                                <div class="latest-update-timestamp"><span><strong>February 3, 2017 @ 9:35 PM MST</strong></span></div>
                            </div>
                        </div>-->
                        <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
                    </div>
                </div>
            </div>
        </div>
        <style>
    a:visited {
        color: white;
    }
    a:link {
        color: white;
    }
</style>
        <footer></footer>
    </div>
    <div class="footer-dark">
        
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">

                    </div>
                    <div class="col-md-6 item text" style="margin-bottom:150px;">
                        <h3><?php echo $statuspage_title ?></h3>
                        <p>This is your Statuspage!</p> <!-- Change this! -->
                        <p class="copyright">OpenDuck Project</p> <!--  You can remove this footer, but please show your love to the community and let it stay in here.  -->
                        <p>DuckStat OSS by the OpenDuck Project</p> <!--  We hope you love this Open-Source Project  -->
                    </div>                                        <!-- You can also outcomment it and put in your own values -->
                </div>
            </div>
            </div>
        </footer>

</body>
<!-- DO NOT DELETE COPYRIGHT NOTICE BELOW -->

<!--  DuckStat OSS by Duck Developing Studio and the OpenDuck Project  -->
<!-- 2020 -->
</html>