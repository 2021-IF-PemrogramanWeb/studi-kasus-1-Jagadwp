<?php

$servername = "localhost";
$database = "studi-kasus-1";
$username = "postgres";
$password = "admin";

// Create connection
$conn = pg_connect("host=$servername dbname=$database user=$username password=$password");

// Check connection
if (!$conn) {
    die("Connection failed: " . pg_last_error());
}
// echo "Connected successfully";
?>