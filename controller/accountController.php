<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
if (isset($_SESSION['user'])) {
	$accountBarPath = "logged";
	$user = json_decode($_SESSION['user']);
} else {
	$accountBarPath = "notLogged";
}
?>