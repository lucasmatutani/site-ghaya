<?php
$hostname = "localhost";
$username = "u680727787_matutani";
$password = "1dIpW35!5f9^";
$dbname = "u680727787_ghaya";

// Create connection
$conn = mysqli_connect($hostname, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
