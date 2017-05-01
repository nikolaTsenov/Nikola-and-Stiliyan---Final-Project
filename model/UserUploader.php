<?php
class UserUploader {
	// No instances required here
	
	public static function changeFileName ($fileOriginalName, User $user) {
		$temporary = explode(".", $fileOriginalName);
		if (strlen($user->email) != mb_strlen($user->email,"UTF-8")) {
			throw new Exception("Не може да сменяте аватара си!");
		} 
		$userEmail = $user->email;
		$userEmailExploded = explode(".", $userEmail);
		$newName = "";
		for ($index = 0; $index < count($userEmailExploded); $index++) {
			$newName .= $userEmailExploded[$index];
		}
		return $newName . '.' . end($temporary);
	}
	
	public static function uploadFile ($fileOnServerName, $newFileName) {
		if (is_uploaded_file ( $fileOnServerName )) {
				
			if (! file_exists ( '../assets/avatars' )) {
				mkdir ( '../assets/avatars' );
			}
			if (file_exists('../assets/avatars/' . $newFileName)) {
				unlink('../assets/avatars/' . $newFileName);
			}
			//move_uploaded_file($_FILES["file"]["tmp_name"], "../img/imageDirectory/" . $newfilename);
			if (move_uploaded_file ( $fileOnServerName, '../assets/avatars/' . $newFileName )) {
				return true;
			} else {
				throw New Exception("Неуспешно качване.");
			}
		} else {
			throw New Exception("Неуспешно качване.");
		}
				
	}
	
	public static function deleteFile (User $user) {
		if (file_exists($user->picture)) {
			unlink($user->picture);
			
			return true;
		}
		return false;
	}
}