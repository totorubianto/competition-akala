<?php

namespace App\Models;

use App\Core\Model;

class User extends Model {

	public function getid($id){
		$sql = "SELECT * FROM pengelola WHERE id=$id";
		$result = $this->db->query($sql);
		return $result;
	}
	public function get4(){
		$sql = "SELECT * FROM tVR ORDER BY id DESC LIMIT 4";
		$result = $this->db->query($sql);
		return $result;
	}
}
