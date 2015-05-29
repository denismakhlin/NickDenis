<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
<link type="text/css" rel="stylesheet" href="css/style.css">
<?php

//This connects the confi.php page to this page
require_once(__DIR__ . "/../model/config.php");

//this will post your text
$query = "SELECT * FROM post";
$result = $_SESSION["connection"]->query($query);


//if the text post works it will  post whats in this if so you can add styles and things
if ($result) {
    while ($row = mysqli_fetch_array($result)) {
        echo "<div id='post' class='post'>";
        echo "<h2 id='titlepost'><u>" . $row['title'] . "</u></h2>";
        echo "<h3 id='titlepost'>" . $row['post'] . "</h3>";
        echo "<p id='titlepost'>Created By: " . $row['username'] . "</p>";
        echo "</div>";
    }
}