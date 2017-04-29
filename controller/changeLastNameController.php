<?php
// Load all classes, abstract classes, traits and interfaces:
function my_autoloader($className) {
	require_once "../model/" . $className . '.php';
}

spl_autoload_register('my_autoloader');
// Require the account controller in order to read the session and get the object $user from class User:
 require_once "./accountController.php";

if (isset($_POST['submitLastNameChange']) ) {
	try {
		// Record all the data from the form in variables:
		$newLastName = htmlentities(trim($_POST['changeLastName']));
		// Create new object of class User:
		$userForSet = new User($user->email, 'sth', $user->name, null, null, null, null,
				$newLastName, null, null);
		// Set new last name:
		$userForSet->setLastName($newLastName,$userForSet);
		//throw New Exception(var_dump($userForSet)); //- for testing purposes
		// If all checks are ok, create new object from class UserDAO:
		$userData = new UserDAO();
		// Change the last name in the database:
		$userData->changeLastName($userForSet);
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
?>