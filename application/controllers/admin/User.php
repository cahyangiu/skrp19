<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') != TRUE)
			redirect(base_url());

		$this->load->model('m_user');
	}

	public function index()
	{
		$data['pluginjs'] = array(
			'vendors/momentjs/moment.min.js'
		);

		$data['customjs'] = array(
			'user.js'
		);

		$data['user'] = $this->m_user->view('tb_user');

		$this->template->layout('admin/user/add',$data);
	}

	public function add()
	{
		//Tambah Data
		$this->m_user->insert();

		$pesan = 'User berhasil ditambah.';

		echo json_encode($pesan);
		// print_r($_POST);
	}

	public function edit()
	{
		//Ambil POST ID
		$id = $this->input->post('id_ajax');

		//Ambil Data
		$this->m_user->update($id);

		$pesan = 'User berhasil diubah.';

		echo json_encode($pesan);
	}

	public function delete()
	{
		//Ambil POST Delete
		$id = $this->input->post('id_ajax');

		//Hapus Data
		$this->m_user->delete('tb_user','user_id',$id);

		$pesan = 'User berhasil dihapus.';
		echo json_encode($pesan);
	}

	public function get_all()
	{
		$data = $this->m_user->view('tb_user');

		echo json_encode($data);
	}

	public function get_one()
	{
		//Ambil POST
		$id = $this->input->post('id_ajax');

		$data = $this->m_user->view_one('tb_user','user_id',$id);

		echo json_encode($data);
	}
}
