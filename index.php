<?php
//links cofig file here
require_once(__DIR__ . "/model/config.php");
//This connects the header.php page to this page
require_once(__DIR__ . '/controller/login-verify.php');

//This connects the header.php page to this page
require_once(__DIR__ . '/view/header.php');
if (authenticateUser()) {
//This connects the navigation.php page to this page
    require_once(__DIR__ . '/view/navigation.php');
}
//This connects the create_db.php page to this page
require_once(__DIR__ . '../controller/create-db.php');

//This connects the footer.php page to this page
require_once(__DIR__ . '/view/footer.php');

//this connects read-posts page to the index page 
require_once(__DIR__ . "/controller/read-posts.php");
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
    </head>
    <a href="mainpage.php">Main</a>
    <body>
        <div id="welltab" class="well well-lg">
            <img id="app-logo" src="img/app-logo.jpg">

            <p id="p-index1">Welcome to Pit Stop © for App Academy. Login and Register Below</p>

            <hr id="hr1">
            
        <form method="post" action="<?php echo $path . "controller/login-user.php" ?>">
        <div class="row">
            
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Email (Optional)" aria-describedby="basic-addon1">
            </div>
            
            <div class="input-group" id="test">
                <input type="text" class="form-control" name="username" placeholder="Username" aria-describedby="basic-addon1">
            </div>

            <div class="input-group" id="test">
                <input type="password" class="form-control" name="password" placeholder="Password" aria-describedby="basic-addon1">
            </div>
            <div class="btn-group" role="group">
                <a id="nodeco"><button type="submit" id="button1" type="button" class="btn btn-default" style="
                        width: 200px;
                        height: 50px;
                        display: block;
                        margin-top: 15px;
                        color: black;
                        margin-left: 190px;
                        border-radius: 10px;
                        font-size: 15px;
                        border: 1px solid grey;
                        "><b>Login</b></button></a>
            </div>
            <p><a href="view/register-form.php" id="registerbutton">Register?</a></p>
        </div>
       </form>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>

