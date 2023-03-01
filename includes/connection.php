<?php
$hostname = "auth-db881.hstgr.io";
$username = "u680727787_matutani";
$password = "tD92&41WR9$#";
$dbname = "u680727787_ghaya";

// Create connection
$conn = mysqli_connect($hostname, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
