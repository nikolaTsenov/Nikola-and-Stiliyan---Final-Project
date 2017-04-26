<?php
class UserValidation {
	
	const CHECK_NAME_IF_EXISTS_SQL = "SELECT name FROM users WHERE name = ?";
	const CHECK_EMAIL_IF_EXISTS_SQL = "SELECT email FROM users WHERE email = ?";
	
	public function checkName (User $user) {
		if (mb_strlen($user->name,"UTF-8") > 25) {
			throw new Exception("Съжаляваме, името Ви не може да бъде повече от 25 букви!");
		} elseif (mb_strlen($user->name,"UTF-8") < 3) {
			throw new Exception("Съжаляваме, името Ви не може да бъде по-малко от 3 букви!");
		} else {
			$db = DBConnection::getDb();
	
			$pstmt = $db->prepare(self::CHECK_NAME_IF_EXISTS_SQL);
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
				$db = DBConnection::getDb();
				
				$pstmt = $db->prepare(self::CHECK_EMAIL_IF_EXISTS_SQL);
				$pstmt->execute(array($user->email));
				
				$emailCheck = $pstmt->fetchAll(PDO::FETCH_ASSOC);
				
				if (count($emailCheck) > 0) {
					throw new Exception("Съжаляваме, този мейл е зает!");
				}
				
				return true;
			}
		}
	}
}