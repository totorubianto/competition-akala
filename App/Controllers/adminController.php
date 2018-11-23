<?php

namespace App\Controllers;

use App\Core\Controller,
App\Models\Admin;

class adminController extends Controller {
	public function __construct() {
		$this->Admin = new Admin();
	}
	
	public function index() {
		$result=$this->Admin->selectAll();
		$this->loadTemplate1('index',array('result' => $result));
	}
	
	// public function delete($id){
	// 	$this->Admin->delete($id);
	// }
	// public function update($id){
	// 	// $this->User->update($id);
	// 	$result=$this->Admin->selectupdate($id);
	// 	$this->loadview('admin/update',array('id' => $id, 'result' => $result->fetch_array(MYSQLI_ASSOC)));
	// }
	// public function updatedata($id){
	// 	$username=$_POST['username'];
	// 	$password=$_POST['password'];
	// 	$this->Admin->update($id,$username,$password);
	// }
	// public function add(){
	// 	$this->loadTemplate1('admin/add');
		
	// }
	public function adddata(){
		$nama=$_FILES['gambar']['name'];
		$lokasi=$_FILES['gambar']['tmp_name'];
		move_uploaded_file($lokasi, BASEDIR . 'assets/' . $nama);
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		$this->Admin->add($username,$password,$nama);
	}
	public function get_login(){
		$username=$_POST['email'];
		$password=$_POST['password'];
		$result=$this->Admin->proseslogin($username,$password);
	}
	
	
}





