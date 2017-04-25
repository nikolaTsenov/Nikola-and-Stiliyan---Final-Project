<?php
	class UserDAO implements IUserDAO {
		
		const CHECK_USER_SQL = "SELECT name, email, user_id FROM users WHERE email = ? AND password = sha1(?)";
		
		public function loginUser(User $user) {
			$db = DBConnection::getDb();
			
			$pstmt = $db->prepare(self::CHECK_USER_SQL);
			$pstmt->execute(array($user->email, $user->password));
			
			$res = $pstmt->fetchAll(PDO::FETCH_ASSOC);
			
			if (count($res) === 0) {
				throw new Exception("Грешен имейл или парола!");
			}
			
			$user = $res[0];
			
			return new User($user['name'], $user['email'], 'sth', $user['user_id']);
		}
		
	}
?>