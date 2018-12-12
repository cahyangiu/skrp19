<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends MY_Controller {

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
