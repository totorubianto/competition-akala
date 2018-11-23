<?php

namespace App\Controllers;

use App\Core\Controller,
App\Models\Admin;

class indexController extends Controller {
	public function __construct() {
		$this->Admin = new Admin();
	}

	public function index(){
		$result=$this->Admin->getsAll();
		$this->loadTemplate('index',array('result' => $result));
	}
	public function detail($id){
		$result=$this->Admin->getid($id);
		$this->loadTemplate('detail',array('id' => $id, 'result' => $result->fetch_array(MYSQLI_ASSOC)));
	}
	
	public function add(){
		$this->loadTemplate('admin/add');
	}
	public function addvr(){
		$preview=$_FILES['preview']['name'];
		$lokasi_preview=$_FILES['preview']['tmp_name'];
		move_uploaded_file($lokasi_preview, BASEDIR . 'assets/images/' . $preview);
		$vr=$_FILES['VR_image']['name'];
		$lokasi_vr=$_FILES['VR_image']['tmp_name'];
		move_uploaded_file($lokasi_vr, BASEDIR . 'assets/images/' . $vr);
		$title=$_POST['title'];
		$description=$_POST['description'];
		$this->Admin->add($title,$description,$vr,$preview);
	}
	public function login(){
		$username=$_POST['email'];
		$password=$_POST['password'];
		$result=$this->Admin->proseslogin($username,$password);

	}
	public function logout(){
		session_destroy();
		echo "<meta http-equiv='refresh' content='1;url=../index'>";
	}
	public function daftar(){
		$this->loadTemplate('daftar');
	}
	public function help(){
		$result=$this->Admin->getsAll();
		$this->loadTemplate('help');
	}
	
}
