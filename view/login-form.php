<?php
//links cofig file here
require_once(__DIR__ . "/../model/config.php");
?>

<!--links bootstrap and css-->
<link rel="icon" href="http://fc08.deviantart.net/fs70/i/2012/091/d/9/troll_face_ios_style_icon_image_by_farias2696-d4unc2r.png" type="image/png">
<link type="text/css" rel="stylesheet" href="style.css">
<link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
<link type="text/css" rel="stylesheet" href="css/bootstrap.css">


<!--this is to link the jquery to this page-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


<!--this is a redirect to the login-user-->
<form method="post" action="<?php echo $path . "controller/login-user.php" ?>">
    <div class="container">
        <div class="row">
            <div class="col-xs-2">
            </div>
            <div class="col-xs-7">  
                <!--this  is the username box-->
                <div class="form-group">
                    <label for="username" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Username">
                    </div>
                </div>
                <!--password text box-->
                <div class="form-group">
                    <label for="password" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                </div>
                <!--this is the remember me box-->
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                    </div>
                </div>
                <!--this is the sign in button-->
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Sign in</button>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</form>
