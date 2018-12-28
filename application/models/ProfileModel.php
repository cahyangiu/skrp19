<?php

class ProfileModel extends CI_Model{

	public function user($username){

		$query = $this->db->query("SELECT * FROM tb_user WHERE user_username='$username'");
		$user = array(
				'id'=>$query->row()->user_id,
				'username'=>$query->row()->user_username,
				'fullname'=>$query->row()->user_fullname,
				'foto'=>$query->row()->user_foto
			);

		return $user;

	}

}

?>