<?php
class m_user extends MY_Model{

	protected $table   = 'tb_user';
	protected $primary = 'user_id';

	public function insert()
	{
		$post = $this->input->post(null,true);
		$namaFile 			= $_FILES['user_foto']['name'];
		$namaSementara 		= $_FILES['user_foto']['tmp_name'];
		$data = array(
			'user_foto'		=> $namaFile,
			'user_username' => $post['user_username'],
			'user_fullname' => $post['user_fullname'],
			'user_password' => md5($post['user_password']),
			);
		$dirUpload = "foto/";
		move_uploaded_file($namaSementara, $dirUpload.$namaFile);
		$this->save($this->table, $data);
		$this->session->userdata('success','User berhasil ditambah');
		

	}

	public function update($id)
	{
		$post = $this->input->post(null,true);

		$data = array(
			'user_username' => $post['user_username'],
			'user_fullname' => $post['user_fullname'],
			'user_password' => md5($post['user_password']),
			'foto'			=> $post['foto'],
					// 'user_foto'		=> $post['user_foto']
			);

		$this->edit($this->table, $this->primary, $id, $data);

		// $this->session->userdata('success','User berhasil diubah');
	}
}

