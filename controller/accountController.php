<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
if (isset($_SESSION['user'])) {
	$accountBarPath = "logged";
	// Repeat this code here from homeController in order all links from view to work properly with sessions:
	$user = json_decode($_SESSION['user']);
	
	if ($user->first_name == null) {
		$fName = "Няма избрано име!";
	}
	
} else {
	$accountBarPath = "notLogged";
}
?>