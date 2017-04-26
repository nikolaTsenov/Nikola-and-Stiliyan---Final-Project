<?php
// Session initialize:
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}

// Delete all session variables:
$_SESSION = array();

// If we are to delete the session we need to delete all its variables and cookies
// Warning: That way we will delete all the variables and cookies of the session
if (isset($_COOKIE[session_name()])) {
	setcookie(session_name(), '', time()-42000, '/');
}

// Destroy the session for final:
session_destroy();
// Redirect the user after session destroy:
header('Location:homeController.php', true, 302);
?>