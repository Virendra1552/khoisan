<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		
		$data['header'] = 'partials/header';
		$data['body'] = 'Auth/index';
		$data['footer'] = 'partials/footer';
		$data['title'] = 'khoisan';
		
		$this->load->view('frontend_template', $data);
		// $this->load->view('Auth/login');
	}
}
