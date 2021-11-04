<?php
session_start();
include_once('databaseconnect.php');

if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$result =  pg_query($conn, "SELECT * FROM admin WHERE email = '$email' AND password = '$password' LIMIT 1");
	

	if (pg_num_rows($result) === 1) {
		$_SESSION["login"] = true;

		$data = pg_fetch_assoc($result);
		$username = explode("@", $data["email"])[0];
		$_SESSION["username"] = $username;

		header("Location: /table.php");
		exit;
	} 

	header("Location: /loginFailed.php");
}
?>