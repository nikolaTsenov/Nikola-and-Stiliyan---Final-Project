<?php
// Load all classes, abstract classes, traits and interfaces:
function my_autoloader($className) {
	require_once "../model/" . $className . '.php';
}

spl_autoload_register('my_autoloader');
// Require the account controller in order to read the session and get the object $user from class User:
require_once "./accountController.php";

if (isset($_POST['submitAddressChange']) ) {
	try {
		// Record all the data from the form in variables:
		$newStrAddress = htmlentities(trim($_POST['changeAddressStr']));
		$newCityAddress = htmlentities(trim($_POST['changeAddressCity']));
		$newPCAddress = htmlentities(trim($_POST['changeAddressPC']));
		// Validation:
		// Create new object of class UserValidation():
		$validator = new UserValidation();
		// Validate street address:
		$validator->validateStreetAddress($newStrAddress);
		// Validate city:
		$validator->validateCityAddress($newCityAddress);
		// Validate post code:
		$validator->validatePostCode($newPCAddress);
		// Create new user from class User:
		$userForNewAddress = new User($user->email, 'sth', $user->name, $user->id, null, null, null,
				null, null, $user->address_id);
		// throw New Exception(var_dump($userForNewAddress)); // - for testing
		// Check if addres is to be added or updated:
		$addressExistence = $validator->checkAddressIfExists($userForNewAddress);
		// throw New Exception(var_dump($addressExistence)); // - for testing
		// Create new object of class UserDAO:
		$userData = new UserDAO();
		// Options:
		if ($addressExistence) {
			// address update
			$userData->changeAddressIfExists($userForNewAddress, $newStrAddress, $newCityAddress, $newPCAddress);
		} else {
			// address add
			$userData->changeAddressIfNotExists($userForNewAddress, $newStrAddress, $newCityAddress, $newPCAddress);
		}
		// Get the user user with the modified data:
		$newUserData = $userData->getUserData($userForNewAddress);
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