<?php
/**
 * Created by PhpStorm.
 * User: Garrett
 * Date: 5/20/2015
 * Time: 4:54 PM
 *
 * Alternative version of blog that utilizes a sort of "necklace" navigation
 */

require "toughlove_classes/user.php";

$username = $_GET["username"];
$user = null;

if($username != null){
    //Dummy user for now, it is myself
    $user = new User($username);
}else{
    $user = new User("Default");
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
    <link rel="stylesheet" href="css/toughlove.css">
    <link rel="stylesheet" href="css/blog2.css">
    <script src="js/style.js"></script>
    <script src="js/blog2.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
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
            <ul class="nav navbar-nav">
                <li><a href="#">Home</a></li>
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
</nav>

<div class="necklace">
    <div class="pearl">
        Usage
    </div>
    <div class="pearl">
        Running
    </div>
    <div class="pearl">
        Sponsor
    </div>
    <div class="pearl">
        About
    </div>
    <div class="pearl">
        Weight
    </div>
    <div class="pearl">
        Goals
    </div>
    <div class="pearl">
        Album
    </div>
</div>

<div class="row no-gutters">

</div>

<script>


</script>

</body>
</html>