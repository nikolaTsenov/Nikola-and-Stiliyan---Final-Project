<?php
// Load all classes, abstract classes, traits and interfaces:
function __autoload($className) {
	require_once "../model/" . $className . '.php';
}
// Require the account controller in order to read the session and get the object $user from class User:
require_once "./accountController.php";

if (isset($_POST['submitPhoneChange']) ) {
	try {
		// Record all the data from the form in variables:
		$newPhone = htmlentities(trim($_POST['changePhone']));
		// Create new object of class User:
		$userForSet = new User($user->email, 'sth', $user->name, null, $newPhone, null, null,
				null, null, null);
		// Set new phone number:
		$userForSet->setPhone($newPhone,$userForSet);
		//throw New Exception(var_dump($userForSet)); //- for testing purposes
		// If all checks are ok, create new object from class UserDAO:
		$userData = new UserDAO();
		// Change the phone number in the database:
		$userData->changePhone($userForSet);
		//throw New Exception(var_dump($userForSet)); //- for testing purposes
		// Get the user with the modified data:
		$newUserData = $userData->getUserData($userForSet);
		//throw New Exception(var_dump($newUserData)); //- for testing purposes
		// Replace the session 'user' with the new data:
		$_SESSION['user'] = json_encode($newUserData);
		// Redirect the new user to homecontroller:
		header('Location:../view/profile.php', true, 302);
	}
	catch (Exception $e) {
		$errorMessage = $e->getMessage();
		include '../view/profile.php';
	}
} else {
	header('Location:../view/profile.php');
}