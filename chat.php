<html>
    <head>
        <title>PitStop | For App Academy</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <link rel="icon" href="img/PitstopIcon.png" type="image/png">
        <link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div id="nav">
            <nav class="navbar navbar-default" id="nav1">

                <img src="img/PitStop.png" style="height: 50px; display: block; margin: auto;">

            </nav>  
        </div>
        <nav class="navbar navbar-default navbar-fixed-bottom" id="nav2">
            <div class="container">
            </div>
        </nav>

        <div class="verticalLine2">
            <div class="page-header">
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
                ?>

                <form method="post" action="<?php echo $path . "controller/create-post.php" ?>">

                    <div class="container">
                        <div class="row" id="row1">
                            <div class="col-xs-3">
                            </div>
                            <!--this is the title box-->
                            <div class="col-xs-6"> 
                                <input id="textarea4" type="text" name="title" class="form-control" placeholder="Title">
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div>
                                            <label>

                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!--this is the text box-->
                                <textarea id="textarea3" name="post" class="form-control" placeholder="Text" rows="3"></textarea>
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
                                            <button id="buttononchat" type="submit" class="btn btn-default">Post to Chat</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            
            </div>
            
            <p id="rightcenter"><a href="mainpage.php">Home</a></p>
            <p  id="rightcenter"><a href="http://wiki.theappacademy.us/index.php?title=Main_Page">Watch Videos</a></p>
            <p id="rightcenter"><a href="http://www.theappacademy.us/">App Academy</a></p>
            <p id="rightcenter"><a href="index.php">Log Out</a></p>
            
        </div>

        <div class="verticalLine">
            <div id="divinvline">
                <p id="invline">Nick Malfitano</p>

                <p id="invline2">Time Left On Project: </p>

                <p id="invline3"> </p>
            </div>
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">Portfolio 3</div>
                <div class="panel-body">
                    <p id="charttext">Below is Your Current Project Progress Goals</p>
                </div>

                <!-- Table -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Grade</th>
                            <th>Day</th>
                            <th>Video</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>A</td>
                            <td>15</td>
                            <td>27</td>
                        </tr>
                        <tr>
                            <td>B</td>
                            <td>12</td>
                            <td>25</td>
                        </tr>
                        <tr>
                            <td>C</td>
                            <td>10</td>
                            <td>21</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                    60% Done
                </div>
            </div>
        </div>

        <div id="jumbotron" class="jumbotron">
            <div class="container">
                <h1 style="text-align: center; margin-top: -40px; font-family: 'Dosis', sans-serif;">Chat</h1>
                <?php
                //this connects read-posts page to the index page 
                require_once(__DIR__ . "/controller/read-posts.php");
                ?>

            </div>
        </div>
        <script type="text/javascript">
            var count = 2419200;
            var counter = setInterval(timer, 1000);

            function timer() {
                count = count - 1;
                if (count == -1) {
                    clearInterval(counter);
                    return;
                }

                var seconds = count % 60;
                var minutes = Math.floor(count / 60);
                var hours = Math.floor(minutes / 60);
                var days = Math.floor(count / 86400);
                minutes %= 60;
                hours %= 60;

                document.getElementById("invline3").innerHTML = days + " : " + hours + " : " + minutes; // watch for spelling
            }
        </script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
