<?php

$servername = "localhost";
$database = "studi-kasus-1";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// $conn = pg_connect("host=$servername dbname=$database user=$username password=$password");

// Check connection
if (!$conn) {
    die("Connection failed: " . pg_last_error());
}
// echo "Connected successfully";
?>