<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('loginmodel');
	}

	public function login()
	{

		if($this->session->userdata('logged')) {
			redirect(base_url());
		} else {
			$this->load->view('loginview');
		}

	}

	public function auth(){

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$cek = $this->loginmodel->cek($username,$password);


		if($cek)
		{
			$sess_data = array (
							'logged' => true,
							'username' => $cek->user_username,
							'fullname' => $cek->user_fullname,
						);

			$this->session->set_userdata($sess_data);

			redirect(base_url());
		} else {
			$pesan = 'Username dan Password Anda keliru. Periksa kembali.';
			$this->session->set_flashdata('error',$pesan);

			redirect(base_url('login'));
		}

	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

}

?>