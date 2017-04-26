<?php
function __autoload($className) {
	require_once "../model/" . $className . '.php';
}

if (isset($_POST['submit'])) {
	try {
		// Record all the data from the form in variables:
		$email = htmlentities(trim($_POST['email']));
		$pass = htmlentities(trim($_POST['password']));
		$name = htmlentities(trim($_POST['username']));
		$repass = htmlentities(trim($_POST['repeatPassword']));
		// Check for empty fields:
		if (mb_strlen($email,"UTF-8") < 1 || mb_strlen($pass,"UTF-8") < 1 ||
			mb_strlen($name,"UTF-8") < 1 || mb_strlen($repass,"UTF-8") < 1) {
				throw new Exception("Празно поле!");
		}
		// Validate password length: 
		if (mb_strlen($pass,"UTF-8") < 6) {
			throw new Exception("Моля въведете поне 6 символа за сигурна парола!");
		}
		if (mb_strlen($pass,"UTF-8") > 30) {
			throw new Exception("Вашата парола не може да превишава 30 символа!");
		}
		// Check if the passwords match:
		if ($pass != $repass) {
			throw new Exception("Паролите не съвпадат!");
		}
		// Create new object from class User:
		$user = new User($email,$pass,$name);
		// Create new object from class UserValidation:
		$keeper = new UserValidation();
		// Check if the email is valid:
		$keeper->checkEmail($user);
		// Check if the name is valid:
		$keeper->checkName($user);
		// If all checks are ok, create new object from class UserDAO:
		$userData = new UserDAO();
		// Register the new user:
		$regUser = $userData->registerUser($user);
		// Log the ne user:
		$loggedUser = $userData->loginUser($user);
		// Start session for the new user:
		session_start();
		$_SESSION['user'] = json_encode($loggedUser);
		// Redirect the new user to homecontroller:
		header('Location:homeController.php', true, 302);
	}
	catch (Exception $e) {
		$errorMessage = $e->getMessage();
		include '../view/register.php';
	}
} else {
	header('Location:../view/index.php');
}
?>