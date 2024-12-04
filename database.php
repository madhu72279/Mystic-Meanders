<?php

$hostName = "localhost";
$dbUser = "madhavi";
$dbPassword = "123456";  // Your password
$dbName = "login_register";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>