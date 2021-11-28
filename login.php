<?php
session_start();
include_once('databaseconnect.php');

if (isset($_POST['login'])) {

	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

		header("Location: /loginFailed.php");
		exit;
	}

	$email = pg_escape_string($_POST['email']);
	$password = pg_escape_string($_POST['password']);
	
	$result =  pg_prepare($conn, "login_query", 'SELECT * FROM admin WHERE email = $1 AND password = $2 LIMIT 1');
	$result =  pg_execute($conn, "login_query", array($email, $password));
	

	if (pg_num_rows($result) === 1) {
		$_SESSION["login"] = true;

		$data = pg_fetch_assoc($result);
		$username = explode("@", $data["email"])[0];
		$_SESSION["username"] = ucfirst($username);

		setcookie('test', 'cookie is active', time() + 20, "/");

		header("Location: /table.php");
		exit;
	} 

	header("Location: /loginFailed.php");
}
?>