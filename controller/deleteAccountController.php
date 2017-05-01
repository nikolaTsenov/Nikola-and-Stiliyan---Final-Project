<?php
function my_autoloader($className) {
	require_once "../model/" . $className . '.php';
}

spl_autoload_register('my_autoloader');
	// require accountController.php to give this file visibility to the $_SESSION['user'] and its content:
 	require_once "../controller/accountController.php";
	
	//For testing goals you can uncomment:
	// 		echo $user->name;
	// 		echo $user->email;
	// 		echo $user->id;
	// 		echo $user->address_id;
	// 		echo $user->favorite_id;
	// 		echo $user->phone;
	// 		echo $user->picture;
	// 		echo $user->is_subscr;
	// 		echo $user->password; - ne se pokazva
	
	if (isset($_POST['submitDeleteAccount'])) {
		try {
		// Create user from class User for checking session and than deletion:
		$userForCheckAndDell = new User($user->email, 'sth', 
							 $user->name, $user->id, $user->phone,
							 $user->picture, $user->first_name, $user->last_name, 
							 $user->favorite_id, $user->address_id);
			// throw New Exception(var_dump($userForCheckAndDell)); //-for testing
			// create object from class UserValidation:
			$sessChecker = new UserValidation();
			// Check for rights to delete this account:
			$sessChecker->checkSession($userForCheckAndDell);
			// Create new object from class UserDAO
			$userData = new UserDAO();
			// Delete the user:
			// throw New Exception(var_dump($userForCheckAndDell)); //-for testing
			$userData->deleteUser($userForCheckAndDell);
			// Delete profile picture if exists:
			UserUploader::deleteFile($userForCheckAndDell);
			// Unlog the user and delete his/her session:
			header('Location:logoutController.php', true, 302);
		}
		catch (Exception $e) {
			$errorMessage = $e->getMessage();
			include '../view/profile.php';
		}
	} else {
		header('Location:../view/index.php');
	}
?>