<?php
//links config file and the login verify page
require_once(__DIR__ . "/../model/config.php");
require_once(__DIR__ . "/../controller/login-verify.php");


//if authenticated user it will go to index
if (!authenticateUser()) {
    header("Location: " . $path . "index.php");
    die();
}
?>

<!--this will link bootstrap and css-->
<link rel="icon" href="http://fc08.deviantart.net/fs70/i/2012/091/d/9/troll_face_ios_style_icon_image_by_farias2696-d4unc2r.png" type="image/png">
<link type="text/css" rel="stylesheet" href="css/style.css">
<link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
<link type="text/css" rel="stylesheet" href="css/bootstrap.css">


<!--ad code too form for design and things-->

<!--this links jquery-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 


<!--this links to the create-posts page-->
<form method="post" action="<?php echo $path . "controller/create-post.php" ?>">

    <div class="container">
        <div class="row">
            <div class="col-xs-3">
            </div>
            <!--this is the title box-->
            <div class="col-xs-6"> 
                <input type="text" name="title" class="form-control" placeholder="Title">
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div>
                            <label>

                            </label>
                        </div>
                    </div>
                </div>
                <!--this is the text box-->
                <textarea name="post" class="form-control" placeholder="Text" rows="3"></textarea>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div>
                            <label>

                            </label>
                        </div>
                    </div>
                </div>
                <!--the button to post-->
                <div class="container">
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Post to Blog</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>