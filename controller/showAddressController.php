<?php 
if (isset ( $_GET ['n'] ) && $_SERVER['REQUEST_METHOD'] == 'GET') {
// Load all classes, abstract classes, traits and interfaces:
function my_autoloader($className) {
	require_once "../model/" . $className . '.php';
}

spl_autoload_register('my_autoloader');
// Require the account controller in order to read the session and get the object $user from class User:
require_once "./accountController.php";

if (!isset($user->address_id)) {
	$responseText = array('address_id' => '',
						  'street_address' => 'no address',
						  'city' => '',
						  'post_code' => ''
	);
	echo json_encode($responseText);
} else {
	// record in variable the ajax-send data:
	$userName = $_GET['n'];
	// Create a new object of class UserDAO:
	$userAddressData = new UserDAO();
	// Get all the data for address:
	$theAddressData = $userAddressData->getAddress($userName);
	// Send response to showAddressAjax.js:
	echo json_encode($theAddressData);
}

} else {
	header('Location:../view/profile.php');
}
?>