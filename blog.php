<?php
/**
 * Created by PhpStorm.
 * User: Garrett
 * Date: 5/10/2015
 * Time: 8:20 PM
 */

require "toughlove_classes/user.php";

$username = $_GET["username"];
$user = null;

if($username != null){
    //Dummy user for now, it is myself
    $user = new User($username);
}


?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <title>ToughLove</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/toughlove.css">
    <link rel="stylesheet" href="css/blog.css">
    <script src="js/style.js"></script>
    <script src="js/blog.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
    <div class="row no-gutters">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapsed">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <span class="navbar-brand">ToughLove</span>
            </div>

            <div class="collapse navbar-collapse pull-right" id="navbar-collapsed">
                <ul class="nav navbar-nav toughlove-menu-items">
                    <li><a href="http://www.thetoughlovechallenge.com">Home</a></li>
                    <!--
                            <li><a href="#">The Problem</a></li>
                            <li><a href="#">The App</a></li>
                            <li><a href="#">The Uses</a></li>
                            <li><a href="#">Take the Challenge</a></li>
                            <li class="divider"></li>
                            -->
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
        </div>
</nav>

<div class="row no-gutters">
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2">
        <div class="blog-content">
            <div id="sidebar">
                <div id="profile">
                    <img id="profile_pic" src="<?php echo $user -> profile_pic?>"/>
                    <div id="profile_info">
                        <span><?php echo $user -> username ?></span>
                        <span><?php echo $user -> first_name?> <?php echo $user -> last_name?></span>
                        <span>Age: <?php echo $user -> age?></span>
                        <span>Streak: <?php echo $user -> days_active?></span>
                        <span>Lost: <?php echo $user -> weight_lost?></span>
                        <span>Goal: <?php echo $user -> weight_goal?></span>
                    </div>
                    <div class ="row" id="profile_data">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                           <a id="subscribe_button" href="#">Sponsor!</a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:right">
                            <a id="stats_button"  href="#"><i class="fa fa-line-chart"></i></a>
                        </div>

                    </div>
                </div>
                <div id="album">
                    <div id="album-title">
                        Album (<strong><?php echo $user -> getAlbumLength() ?></strong>)
                    </div>
                    <div id="album-photos">
                        <?php echo $user -> getAlbumPhotosFormatted() ?>
                    </div>
                </div>
            </div>
            <div id="feed">
                <div id="feed-title">
                    Activity (<strong><?php echo $user -> getFeedLength() ?></strong>)
                </div>
            </div>
        </div>

    </div>
</div>

<script>


</script>

</body>
</html>