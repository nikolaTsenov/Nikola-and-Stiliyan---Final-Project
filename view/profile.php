<?php
    include_once "profileHeader.php";
    // set error msg:
    $errorMessage = isset($errorMessage) ? $errorMessage : '';
    // get the current dir from the url:
    $currentDir = $_SERVER['PHP_SELF'];
    // look for logiController in the url:
    if (strpos($currentDir, 'loginController') !== false) {
    	// in this case div.errors needs to be displayed
    	$errorsStyle = 'block';
    } else {
    	// in this case div.errors doesn't need to be displayed
    	$errorsStyle = 'none';
    }
    
?>

<form id="sessDestroyForm" action="../controller/logoutController.php" method="post" >
	<label for="submitDestroy">Излез от профила си</label>
	<input type="submit" name="submitDestroy" value="Изход" />
</form>

<form id="deleteAccountForm" action="../controller/deleteAccountController.php" method="post" >
	<label for="submitDeleteAccount">Изтрий профила си</label>
	<input type="submit" name="submitDeleteAccount" value="Изтрий" />
</form>

<?php
	include_once "profileFooter.php";
?>