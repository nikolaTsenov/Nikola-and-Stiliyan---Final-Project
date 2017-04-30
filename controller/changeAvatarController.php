<?php
// Load all classes, abstract classes, traits and interfaces:
function my_autoloader($className) {
	require_once "../model/" . $className . '.php';
}

spl_autoload_register('my_autoloader');

// Require the account controller in order to read the session and get the object $user from class User:
require_once "./accountController.php";

if (isset($_POST['uploadSubmit'])) {
	if (isset ( $_FILES ['fileUpload'] )) {
		try {
			$fileOnServerName = $_FILES ['fileUpload'] ['tmp_name'];
			$fileOriginalName = $_FILES ['fileUpload'] ['name'];
			$fileOriginalSize = $_FILES ['fileUpload'] ['size'];
			$fileType = $_FILES ['fileUpload'] ['type'];
			
			$keeper = new UserValidation();
			
			$keeper->checкFileIfEmpty($fileOnServerName);
			
			$keeper->checкFileSize($fileOnServerName,$fileOriginalSize);
			
			$keeper->checкFileForFake($fileOnServerName);
			
			$keeper->checкFileExtension($fileOriginalName);
			
			$keeper->checкFileType($fileOnServerName, $fileType);
			
			// Create new object of class User:
			$userForUpload = new User($user->email, 'sth', $user->name);
			// Change the file name before upload:
			$newFileName = UserUploader::changeFileName($fileOriginalName, $userForUpload);
			// Upload file:
			UserUploader::uploadFile($fileOnServerName, $newFileName);
			// Record the directory in variable:
			$newAvatarDirectory = "../assets/avatars/$newFileName";
			// Set User picture path:
			$userForUpload->setPicture($newAvatarDirectory, $userForUpload);
			// If all checks are ok, create new object from class UserDAO:
			$userData = new UserDAO();
			// Change the avatar in the database:
			$userData->changeAvatar($userForUpload);
			// Get the user with the modified data:
			$newUserData = $userData->getUserData($userForUpload);
			// Replace the session 'user' with the new data:
			$_SESSION['user'] = json_encode($newUserData);
			// Redirect the new user:
			header('Location:../view/profile.php', true, 302);
		}
		catch (Exception $e) {
			$errorMessage = $e->getMessage();
			include '../view/profile.php';
		}
	}
} else {
	header('Location:../view/profile.php');
}
?>