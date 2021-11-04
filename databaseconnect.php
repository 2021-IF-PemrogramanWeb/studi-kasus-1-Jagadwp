<?php

$servername = 'ec2-34-200-161-87.compute-1.amazonaws.com';
$database = 'd2aqfsffi4v3u6';
$username = 'ohdlnkifwayxrp';
$password = 'c12db400cbb30d8c8cb0aa445da7a1ed7e8c43a73f0ae669a841132c6d232e92';
// $servername = "localhost";
// $database = "studi-kasus-1";
// $username = "postgres";
// $password = "admin";

// Create connection
$conn = pg_connect("host=$servername dbname=$database user=$username password=$password");
// $conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . pg_last_error());
}
// echo "Connected successfully";
?>