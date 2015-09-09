<?php

  DEFINE ('DB_USER', 'hallwall_client');
  DEFINE ('DB_PASSWORD', '1ongo.74');
  DEFINE ('DB_HOST', 'localhost');
  DEFINE ('DB_NAME', 'hallwall_org');
  
class Db {
	private static $instance = NULL;
	
	private function __construct() {}
	
	private function __clone() {}
	
	public static function getInstance() {
		if (!isset(self::$instance)) {
		self::$instance = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);	
			}
		return self::$instance;
	}
	
}// end of Db



?>