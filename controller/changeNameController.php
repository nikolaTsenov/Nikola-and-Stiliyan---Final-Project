<?php
// Load all classes, abstract classes, traits and interfaces:
function my_autoloader($className) {
	require_once "../model/" . $className . '.php';
}

spl_autoload_register('my_autoloader');
// Require the account controller in order to read the session and get the object $user from class User:
 require_once "./accountController.php";

if (isset($_POST['submitNameChange'])) {
	try {
		// Record all the data from the form in variables:
		$newName = htmlentities(trim($_POST['changeUserName']));
		// Create new object of class User:
		$userForSet = new User($user->email, 'sth', $newName);
		// Set new name:
		$userForSet->setName($newName,$userForSet);
		// throw New Exception(var_dump($userForSet)); - for testing purposes
		// If all checks are ok, create new object from class UserDAO:
		$userData = new UserDAO();
		// Change the username:
		$userData->changeName($userForSet);
		// Get the user user with the modified data:
		$newUserData = $userData->getUserData($userForSet);
		// Replace the session 'user' with the new data:
		$_SESSION['user'] = json_encode($newUserData);
		// Redirect the new user:
		header('Location:../view/profile.php', true, 302);
	}
	catch (Exception $e) {
		$errorMessage = $e->getMessage();
		include '../view/profile.php';
	}
} else {
	header('Location:../view/profile.php');
}
