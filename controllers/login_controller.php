<?php

$host_name = "127.0.0.1";
$host_user = "root";
$host_pass = "";
$database = "univa";

$connection = mysqli_connect($host_name, $host_user, $host_pass, $database);

if ($connection) {
    echo "You're connected!";
} else {
    echo "Sorry, NOT connected";
}


//echo "Getting data for login form";

$user_email = $_GET['user_email'];
$user_pass = $_GET['user_pass'];

if ($user_email == 'david@git.com' && $user_pass == '12345') {
    echo "Welcome ".$user_email;
} else {
    echo "User email or password incorrect";
}


?>