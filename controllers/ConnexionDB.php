<?php
//namespace controllers;


class ConnexionDB{
    protected static $instance;
	protected function __construct() {}
	
	public static function getInstance() {
		if(empty(self::$instance)) {
			$db_info = array(
				"db_host" => "127.0.0.1",
				"db_user" => "root",
				"db_pass" => "",
                "db_name" => "v2"
            );
			try {
				self::$instance = new PDO("mysql:host=".$db_info['db_host'].';dbname='.$db_info['db_name'], $db_info['db_user'], $db_info['db_pass']);
				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);  
			} catch(PDOException $error) {
				echo $error->getMessage();
			}
		}
        return self::$instance;
    }
}
    
