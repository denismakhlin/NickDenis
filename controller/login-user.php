<?php

//This connects the confi.php page to this page
require_once(__DIR__ . "/../model/config.php");

//this is so no innopropriate characters can be in the username and password
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

//this is linked to SESSION variable in the config.php where it is set
$query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE BINARY username = '$username'");

//this is an if statement to check if the password and username is correct andd if its right it will automaticaly redirect you  to the index
if ($query->num_rows == 1) {
    $row = $query->fetch_array();

    if ($row["password"] === crypt($password, $row["salt"])) {
        $_SESSION["authenticated"] = true;
        $_SESSION["name"] = $username;
header('Location: http://localhost/NickDenis3/mainpage.php');
        echo '<p>Login Successful</p>';
        
    } else {
header('Location: http://localhost/NickDenis3/login-error.php');
        echo '<p>Invalid Username/Password</p>';
    }
} else {
header('Location: http://localhost/NickDenis3/login-error.php');
    echo '<p>Invalid Username/Password,</p>';
}
 
