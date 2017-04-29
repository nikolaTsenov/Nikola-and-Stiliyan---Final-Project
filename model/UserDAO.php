<?php
	class UserDAO implements IUserDAO {
		// For the database connection:
		private $db;
		// const for getUserData:
		const GET_USER_SQL = "SELECT name, email, user_id, phone, picture, first_name, last_name, favorite_id, address_id FROM users WHERE email = ? AND name = ? ";
		// const for loginUser:
		const CHECK_USER_SQL = "SELECT name, email, user_id, phone, picture, first_name, last_name, favorite_id, address_id FROM users WHERE email = ? AND password = sha1(?)";
		// const for registerUser:
		const ADD_NEW_USER_SQL = "INSERT INTO users VALUES (null,?,?,sha1(?),null,null,null,null,null,null)";
		// constants for deleteUser:
		const DELETE_USER_FROM_USERS_SQL = "DELETE FROM users WHERE name=? AND email=?;";
		const DELETE_USER_FROM_BASKET_SQL = "DELETE FROM basket WHERE user_id=?;";
		const DELETE_USER_FROM_FAVORITS_SQL = "DELETE FROM favorits WHERE user_id=?;";
		const DELETE_USER_FROM_ORDERS_SQL = "DELETE FROM orders WHERE user_id=?;";
		const DELETE_USER_FROM_ADDRESS_SQL = "DELETE FROM address WHERE address_id=?;";
		// constant for change username:
		const CHANGE_USER_NAME = "UPDATE users SET name=? WHERE email=?";
		
		public function __construct() {
			$this->db = DBConnection::getDb ();
		}
		
		public function getUserData(User $user) {
			$pstmt = $this->db->prepare(self::GET_USER_SQL);
			$pstmt->execute(array($user->email, $user->name));
				
			$res = $pstmt->fetchAll(PDO::FETCH_ASSOC);
				
			if (count($res) === 0) {
				throw new Exception("Няма такъв потребител!");
			}
				
			$user = $res[0];
				
			return new User($user['email'], 'sth', $user['name'], $user['user_id'], $user['phone'],
					$user['picture'], $user['firs_name'],$user['last_name'], $user['favorite_id'], $user['address_id']);
		}
		
		public function loginUser(User $user) {

			$pstmt = $this->db->prepare(self::CHECK_USER_SQL);
			$pstmt->execute(array($user->email, $user->password));
			
			$res = $pstmt->fetchAll(PDO::FETCH_ASSOC);
			
			if (count($res) === 0) {
				throw new Exception("Грешен имейл или парола!");
			}
			
			$user = $res[0];
			
			return new User($user['email'], 'sth', $user['name'], $user['user_id'], $user['phone'],
							$user['picture'], $user['firs_name'],$user['last_name'], $user['favorite_id'], $user['address_id']);
		}
		
		public function registerUser (User $user) {

			$pstmt = $this->db->prepare(self::ADD_NEW_USER_SQL);
			$pstmt->execute(array($user->name, $user->email, $user->password));
		}
		
		public function deleteUser (User $user) {
			
			try {
				$this->db->beginTransaction();
			
				$stmt = $this->db->prepare(self::DELETE_USER_FROM_USERS_SQL);
				$stmt->execute(array($user->name, $user->email));
			
				$stmt = $this->db->prepare(self::DELETE_USER_FROM_BASKET_SQL);
				$stmt->execute(array($user->id));
				
				$stmt = $this->db->prepare(self::DELETE_USER_FROM_FAVORITS_SQL);
				$stmt->execute(array($user->id));
					
				$stmt = $this->db->prepare(self::DELETE_USER_FROM_ORDERS_SQL);
				$stmt->execute(array($user->id));
				
				$stmt = $this->db->prepare(self::DELETE_USER_FROM_ADDRESS_SQL);
				$stmt->execute(array($user->address_id));
			
				$this->db->commit();
			} catch(PDOException $e) {
				//Something went wrong rollback!
				$this->db->rollBack();
				throw New Exception("Нещо се обърка!");
			}
		
		}
		
		public function changeName (User $user) {
			$pstmt = $this->db->prepare(self::CHANGE_USER_NAME);
			$pstmt->execute(array($user->name, $user->email));
		}
	}
?>