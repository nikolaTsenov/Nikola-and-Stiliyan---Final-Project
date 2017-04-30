<?php
class UserValidation {
	// database:
	private $db;
	// const for method checkName:
	const CHECK_NAME_IF_EXISTS_SQL = "SELECT name FROM users WHERE name = ?";
	// const for method checkEmail:
	const CHECK_EMAIL_IF_EXISTS_SQL = "SELECT email FROM users WHERE email = ?";
	// const for method checkSession (with email and name):
	const CHECK_SESSION_SQL = "SELECT name FROM users WHERE email = ? AND name=?";
	// const for method checkSessionWithMail:
	const CHECK_SESSION_WITH_EMAIL_SQL = "SELECT name FROM users WHERE email = ?";
	// const for method checkSessionWithName:
	const CHECK_SESSION_WITH_NAME_SQL = "SELECT email FROM users WHERE name = ?";
	
	public function __construct() {
		$this->db = DBConnection::getDb ();
	}
	
	public function checkName (User $user) {
		if (mb_strlen($user->name,"UTF-8") > 25) {
			throw new Exception("Съжаляваме, името Ви не може да бъде повече от 25 букви!");
		} elseif (mb_strlen($user->name,"UTF-8") < 3) {
			throw new Exception("Съжаляваме, името Ви не може да бъде по-малко от 3 букви!");
		} else {
	
			$pstmt = $this->db->prepare(self::CHECK_NAME_IF_EXISTS_SQL);
			$pstmt->execute(array($user->name));
	
			$nameCheck = $pstmt->fetchAll(PDO::FETCH_ASSOC);
				
			if (count($nameCheck) > 0) {
				throw new Exception("Съжаляваме, името, което сте избрали е заето!");
			}
	
			return true;
		}
	}
	
	public function checkEmail (User $user) {
		if (!filter_var($user->email, FILTER_VALIDATE_EMAIL) === false) {
			$validEmail = true;
		} else {
			$validEmail = false;
			throw new Exception("Съжаляваме, невалиден мейл!");
		}
		if ($validEmail) {
			if (mb_strlen($user->email,"UTF-8") > 40) {
				throw new Exception("Съжаляваме, мейла Ви не може да бъде повече от 40 символа!");
			} elseif (mb_strlen($user->email,"UTF-8") < 5) {
				throw new Exception("Съжаляваме, мейла Ви не може да бъде по-малко от 5 символа!");
			} else {
				
				$pstmt = $this->db->prepare(self::CHECK_EMAIL_IF_EXISTS_SQL);
				$pstmt->execute(array($user->email));
				
				$emailCheck = $pstmt->fetchAll(PDO::FETCH_ASSOC);
				
				if (count($emailCheck) > 0) {
					throw new Exception("Съжаляваме, този мейл е зает!");
				}
				
				return true;
			}
		}
	}
	
	public function checkSession (User $user) {
		
		$pstmt = $this->db->prepare(self::CHECK_SESSION_SQL);
		$pstmt->execute(array($user->email,$user->name));
		
		$sessCheck = $pstmt->fetchAll(PDO::FETCH_ASSOC);
		
		if (count($sessCheck) === 0) {
			throw new Exception("Нямате права върху този потребител!");
		}
		
		return true;
	}
	
	public function checkSessionWithMail (User $user) {
	
		$pstmt = $this->db->prepare(self::CHECK_SESSION_WITH_EMAIL_SQL);
		$pstmt->execute(array($user->email));
	
		$sessCheck = $pstmt->fetchAll(PDO::FETCH_ASSOC);
	
		if (count($sessCheck) === 0) {
			throw new Exception("Нямате права върху този потребител!");
		}
	
		return true;
	}
	
	public function checkSessionWithName (User $user) {
	
		$pstmt = $this->db->prepare(self::CHECK_SESSION_WITH_NAME_SQL);
		$pstmt->execute(array($user->name));
	
		$sessCheck = $pstmt->fetchAll(PDO::FETCH_ASSOC);
	
		if (count($sessCheck) === 0) {
			throw new Exception("Нямате права върху този потребител!");
		}
	
		return true;
	}
	
	public function checкFirstName (User $user) {
		if (mb_strlen($user->first_name,"UTF-8") > 25) {
			throw new Exception("Съжаляваме, името Ви не може да бъде повече от 25 букви!");
		} elseif (mb_strlen($user->first_name,"UTF-8") < 1) {
			throw new Exception("Празно поле за име!");
		} else {
	
			return true;
		}
	}
	
	public function checкLastName (User $user) {
		if (mb_strlen($user->last_name,"UTF-8") > 25) {
			throw new Exception("Съжаляваме, фамилията Ви не може да бъде повече от 25 букви!");
		} elseif (mb_strlen($user->last_name,"UTF-8") < 1) {
			throw new Exception("Празно поле за име!");
		} else {
	
			return true;
		}
	}
	
	public function checкPhone (User $user) {
		
		$phoneException = "Моля, въведете телефон по образец 08XXXXXXXX";
		
		if (mb_strlen($user->phone,"UTF-8") !== 10) {
			throw new Exception($phoneException);
		} elseif (!is_numeric($user->phone)) {
			throw new Exception($phoneException);
		} elseif ($user->phone{0} != 0 &&  $user->phone{1} != 8) {
			throw new Exception($phoneException);
		} else {
			return true;
		}
	}
	
	public function checкFileIfEmpty ($fileOnServerName) {
	
		$emptyFileException = "Не сте избрали нищо за качване!";
	
		if (empty($fileOnServerName)) {
			throw new Exception($emptyFileException);
		}
		
		return true;
	}
	
	public function checкFileForFake($fileOnServerName) {
		$fakeFileException = "Файлът вероятно не е действителен!";
		
		$check = getimagesize($fileOnServerName);
		if($check !== false) {
			return true;
		} else {
			throw new Exception($fakeFileException);
		}
	}
	
	public function checкFileSize ($fileOnServerName,$fileOriginalSize) {
	
		$tooBigFileException = "Снимката не може да е над 5MB!";
	
		if ($fileOriginalSize > 5000000 || filesize($fileOnServerName) > 5000000) {
			throw new Exception($tooBigFileException);
		}
	
		return true;
	}
	
	public function checкFileExtension ($fileOriginalName) {
	
		$extensionException = "Неразрешен формат(разрешени: .jpg,.jpeg,.png,.bmp!)";
		
		$imageFileType = pathinfo ( $fileOriginalName, PATHINFO_EXTENSION );
		if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "bmp") {
			throw new Exception($extensionException);
		}
		
		return true;
	}
	
	public function checкFileType ($fileOnServerName,$fileType) {
	
		$fileTypeException = "Неразрешен формат(разрешени: .jpg,.jpeg,.png,.bmp!)";
	
		if (function_exists ( 'mime_content_type' )) {
			$mimeType = mime_content_type ( $fileOnServerName );
			// First check for MIME type:
			if ($mimeType !== "image/jpeg" && $mimeType !== "image/png" && $mimeType !== "image/bmp") {
				throw new Exception($extensionException);
			}
		} else {
			if ($fileType !== "image/jpeg" && $fileType !== "image/png" && $fileType !== "image/bmp") {
				throw new Exception($extensionException);
			}
		}
	
		return true;
	}
}