<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();

header("Location: /studi-kasus-1-pweb-f/index.php");
exit;

?>