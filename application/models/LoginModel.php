<?php
class LoginModel extends CI_Model{

	public function cek($username,$password){

		$password = md5($password);
		$auth = $this->db->query("SELECT * FROM tb_user WHERE user_username='$username' AND user_password='$password'")->row();

		return $auth;
	}
}

