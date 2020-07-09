<?php

$host_name = "127.0.0.1";
$host_user = "root";
$host_pass = "";
$database = "univa";

$connection = mysqli_connect($host_name, $host_user, $host_pass, $database);

if ($connection) {
    //echo "You're connected!"; 
} else {
    echo "Sorry, NOT connected";
}

$user_pass = $_GET['user_pass'];

$sql = "UPDATE users SET password=$user_pass WHERE id=1";

if (mysqli_query($connection, $sql)) {
    echo "Password updated successfully";
  } else {
    echo "Error updating record: " . mysqli_error($connection);
  }

?>