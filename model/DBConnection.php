<?php

define ( 'DB_HOST', 'localhost' );
define ( 'DB_NAME', 'elbag' );
define ( 'DB_USER', 'root' );
define ( 'DB_PASS', '' );


class DBConnection {
	private static $db = null;
	
	public static function getDb() {
		if (self::$db === null) {
			try {
				self::$db = new PDO ( "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS );
				self::$db->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
				self::$db->exec("SET NAMES utf8;");
				self::$db->exec("SET character_set_results=utf8;");
			}
			catch (PDOException $e) {
				throw new Exception("Problem loading database!", $e);
			}
		}
		
		return self::$db;
	}
}
?>