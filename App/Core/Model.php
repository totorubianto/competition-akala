<?php  

namespace App\Core;

use mysqli;

class Model {

	public $db;

	public function __construct() {
		global $config;
		$this->db = new mysqli($config['host'],$config['dbuser'],$config['password'],$config['dbname']);
	}
}