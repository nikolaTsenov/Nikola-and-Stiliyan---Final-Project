<?php
class User implements JsonSerializable {
	private $id;
	private $name;
	private $password;
	private $email;
	private $phone;
	private $picture;
	private $first_name;
	private $last_name;
	private $favorite_id;
	private $address_id;
	
	function __construct($email, $password, 
						 $name=null, $id = null, $phone = null,
						 $picture = null, $first_name = null, $last_name = null,
						 $favorite_id = null, $address_id = null) {
		
		if (empty($email)) {
			throw new Exception ( 'Няма имейл!' );
		}
		
		if (strlen($password) === 0){
			throw new Exception('Няма парола!' );
		}
		
		$this->name = $name;
		$this->email = $email;
		$this->password = $password;
		$this->id = $id;
		$this->phone = $phone;
		$this->picture = $picture;
		$this->first_name = $first_name;
		$this->last_name = $last_name;
		$this->favorite_id = $favorite_id;
		$this->address_id = $address_id;
	}
	
	public function jsonSerialize() {
		$result = get_object_vars($this);
		unset($result['password']);
		return $result;
	}
	
	public function __get($prop) {
		return $this->$prop;
	}
	
	public function setName($name,$user) {
		$validChecker = new UserValidation();
		
		$validChecker->checkSessionWithMail($user);
		$validChecker->checkName($user);
		
		$this->name = $name;
	}
	
	public function setEmail($email,$user) {
		$validChecker = new UserValidation();
	
		$validChecker->checkSessionWithName($user);
		$validChecker->checkEmail($user);
	
		$this->email = $email;
	}
	
	public function setFirstName($firstName,$user) {
		$validChecker = new UserValidation();
		
		$validChecker->checkSession($user);
		$validChecker->checкFirstName($user);
	
		$this->first_name = $firstName;
	}
	
	public function setLastName($lastName,$user) {
		$validChecker = new UserValidation();
	
		$validChecker->checkSession($user);
		$validChecker->checкLastName($user);
	
		$this->last_name = $lastName;
	}
	
	public function setPhone($phone,$user) {
		$validChecker = new UserValidation();
		
		$validChecker->checkSession($user);
		$validChecker->checкPhone($user);
	
		$this->phone = $phone;
	}
	
	public function setPicture($picture,$user) {
		$validChecker = new UserValidation();
	
		$validChecker->checkSession($user);
	
		$this->picture = $picture;
	}
	
	public function setAddress_id($address_id,$user) {
		$validChecker = new UserValidation();
	
		$validChecker->checkSession($user);
	
		$this->address_id = $address_id;
	}
}

?>