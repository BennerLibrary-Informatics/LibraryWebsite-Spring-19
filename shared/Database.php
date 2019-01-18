<?php

// do not declare if already declared
if(!class_exists('Database')) {
	class Database extends mysqli {
		public function __construct() {
			if (!file_exists(__DIR__ . '/../config/local.php')) {
				die('Local config file has not been created, run `cp local.php.dist local.php` inside the config folder and fill in the values.');
			}
			
			$config = require(__DIR__ . '/../config/local.php');
			parent::__construct($config['host'], $config['user'], $config['pass'], $config['name']);
			
			if ($this->connect_errno) {
				echo "Failed to connect to MySQL: " . $this->connect_error;
				die;
			}
		}
	}
}