<?php
class UserValidation {
	// database:
	private $db;
	// const for method checkName:
	const CHECK_NAME_IF_EXISTS_SQL = "SELECT name FROM users WHERE name = ?";
	// const for method checkEmail:
	const CHECK_EMAIL_IF_EXISTS_SQL = "SELECT email FROM users WHERE email = ?";
	// const for method checkSession:
	const CHECK_SESSION_SQL = "SELECT name FROM users WHERE email = ? AND name=?";
	
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
			throw new Exception("Нямате права да изтриете този потребител!");
		}
		
		return true;
	}
}