<?php
// this links the config file to here
require_once(__DIR__ . "/../model/config.php");
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>PitStop | For App Academy</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="../css/style.css">
        <link type="text/css" rel="stylesheet" href="../css/bootstrap-theme.css">
        <link type="text/css" rel="stylesheet" href="../css/bootstrap.css">
        <link rel="icon" href="img/PitstopIcon.png" type="image/png">
    </head>
    <body>
        <div id="welltab" class="well well-lg">
            <img id="app-logo" src="../img/app-logo.jpg">

            <p id="p-index1">Welcome to Pit Stop for App Academy. Login and Register Below</p>

            <hr id="hr1">
        <form method="post" action="<?php echo $path . "controller/create-user.php" ?>">
        <div class="row">
            <div class="input-group">
                <input type="text" class="form-control" name="email" placeholder="Email" aria-describedby="basic-addon1">
            </div>
            
            <div class="input-group" id="test">
                <input type="text" class="form-control" name="username" placeholder="Username (First & Last Name)" aria-describedby="basic-addon1">
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
                        "><b>Register</b></button></a>
            </div>
            <p><a id="registerbutton" href="../index.php">Back To Login</a></p>
        </div>
        </form>
        </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>



