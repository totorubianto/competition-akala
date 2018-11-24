<?php

namespace App\Models;

use App\Core\Model;

class Admin extends Model {

	public function getsAll() {
		$sql = "SELECT * FROM tVR";
		$result = $this->db->query($sql);
        // $sql = $this->db->prepare("SELECT * FROM " . $this->Table);
		return $result;
	}
	public function getid($id){
		$sql = "SELECT * FROM tVR WHERE id=$id";
		$result = $this->db->query($sql);
		return $result;
	}
	public function delete($id){
		$sql = "DELETE FROM pengelola WHERE id=$id"; 
		$result = $this->db->query($sql);
		header('Location: ' .BASE. '/admin/view');
	}
	public function update($id,$username,$password){
		$sql = "UPDATE pengelola SET username='$username',password='$password' WHERE id=$id";
		$result = $this->db->query($sql);
		header('Location: ' .BASE. 'user');
	}
	public function add($title,$description,$vr,$preview){
		$sql ="INSERT INTO tVR (title, description , VR_image, preview) VALUES ('$title','$description','$vr','$preview')";
		$result = $this->db->query($sql);
		header('Location: ' .BASE. '/index');
	}
	public function selectupdate($id){
		$sql = "SELECT * FROM pengelola WHERE id=$id";
		$result = $this->db->query($sql);
		return $result;
	}
	public function proseslogin($username,$password){
		
		$sql = "SELECT * FROM tUser WHERE name='$username' AND password='$password'";
		$result = $this->db->query($sql);
		$yangcocok = mysqli_num_rows($result);

		if ($yangcocok==1)
		{
			$_SESSION['masuk']=$result->fetch_assoc();
			echo "<meta http-equiv='refresh' content='1;url=../index'>";
		}
		else
		{
			echo "gagal";
		}
	}


}
