<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends MY_Controller {
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') != TRUE)
			redirect(base_url());
	}
	public function index()
	{
		$data['pluginjs'] = array(
			'js/chart.js',
			'vendors/momentjs/moment.min.js'
		);

		$data['customjs'] = array(
			'landing.js'
		);

		$this->template->layout('landing',$data);
	}
}
