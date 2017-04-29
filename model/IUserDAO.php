<?php
	interface IUserDAO {
		/**
		 * 
		 * @param User $user
		 * constructor for database connection
		 */
		public function __construct();
		
		/**
		 * 
		 * @param User $user
		 * @constants GET_USER_SQL
		 * method gets name, email, user_id, phone, picture, first_name, last_name, favorite_id, address_id from the database for wanted user
		 * method throws exception if there is no such user
		 */
		public function getUserData(User $user);
		
		/**
		 * 
		 * @param User $user
		 * @constants - CHECK_USER_SQL
		 * method sends CHECK_USER_SQL query to the database
		 * method checks what is returned from the database and puts in ASSOC ARRAY
		 * if the new ASSOC ARRAY is empty the method throws Exception
		 * else the method returns new User with all parameters froma table Users(from database)
		 */
		public function loginUser(User $user);
		
		/**
		 * 
		 * @param User $user
		 * @constants - ADD_NEW_USER_SQL
		 * method adds new user in table Users, leaving null all fields except email, name and password
		 */
		public function registerUser(User $user);
		
		/**
		 * 
		 * @param User $user
		 * @constant - DELETE_USER_FROM_USERS_SQL
		 * @constant - DELETE_USER_FROM_BASKET_SQL
		 * @constant - DELETE_USER_FROM_FAVORITS_SQL
		 * @constant - DELETE_USER_FROM_ORDERS_SQL
		 * @constant - DELETE_USER_FROM_ADDRESS_SQL
		 * method uses transaction to send 5 queries to the database
		 * method deletes all user data from 5 tables(users,basket,favorits,orders,address
		 */
		public function deleteUser(User $user);
		
		/**
		 * 
		 * @param User $user
		 * @constants - CHANGE_USER_NAME_SQL
		 * method changes the name of a specified user in the database
		 */
		public function changeName(User $user);
		
		/**
		 *
		 * @param User $user
		 * @constants - CHANGE_USER_EMAIL_SQL
		 * method changes the email of a specified user in the database
		 */
		public function changeEmail(User $user);
	}
?>