<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('LoginModel');
		if ($this->LoginModel->loggedin() == TRUE) {
			redirect('Dashboard/login');
		}
	}

	public function index()
	{
		$this->load->view('login/login1');
	}
}
