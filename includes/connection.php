<?php
$url = explode("/", "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
$url_split = $url[0];
if ($url_split == "localhost") {
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "site_ghaya";
} else {
    $hostname = "localhost";
    $username = "u680727787_matutani";
    $password = "1dIpW35!5f9^";
    $dbname = "u680727787_ghaya";
}

// Create connection
$conn = mysqli_connect($hostname, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
