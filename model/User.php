<?php
class User implements JsonSerializable {
	private $id;
	private $name;
	private $password;
	private $email;
	private $phone;
	private $picture;
	private $is_subscr;
	
	function __construct($email, $password, $name=null, $id = null, $phone = null, $picture = null, $is_subscr = null) {
		
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
	}
	
	public function jsonSerialize() {
		$result = get_object_vars($this);
		unset($result['password']);
		return $result;
	}
	
	public function __get($prop) {
		return $this->$prop;
	}
}

?>