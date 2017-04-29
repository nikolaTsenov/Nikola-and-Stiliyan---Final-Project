<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
	if (isset ($_SESSION['user'])) {
	// Load all classes, abstract classes, traits and interfaces:
		function __autoload($className) {
			require_once "../model/" . $className . '.php';
		}
	// Require the account controller in order to read the session and get the object $user:
	require_once "../controller/accountController.php";
	
	// Check if the user has an avatar picture:
	// Create new object of class User:
	$userForAvatarCheck = new User($user->email, 'sth', $user->name, null, null, $user->picture, null,
			null, null, null);
	// Create a new object from class UserDAO:
	$avatarData = new UserDAO();
	// The check itself:
	$avatarCheck = $avatarData->checkPicture($userForAvatarCheck);
	//var_dump($avatarCheck); //-for testing purposes
	// Define var for the path to the avatar pic:
	$pathToAvatarPic = "";
	// Define $pathToAvatarPic value:
	if ($avatarCheck['picture'] == null) {
		$pathToAvatarPic = "../assets/images/register/avatar.png";
	} else {
		$pathToAvatarPic = "";
	}
} else {
	header('Location:../view/index.php');
}
?>