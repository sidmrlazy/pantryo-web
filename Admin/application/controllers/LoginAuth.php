<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginAuth extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('LoginModel');
	}

	public function checking()
	{

		$data = array(
			'user_mobile' => $this->input->post('uname'),
			'user_password' => $this->input->post('password')
		);

		$res = $this->LoginModel->checking($data);
		// print_r($data);
		if ($res == TRUE) {
			redirect('Dashboard/login');
		} else {
			$this->session->set_flashdata('error', '<span style="color:red;">Mobile / Password combination does not exist</span>');
			redirect('Welcome');
		}
		// $this->load->view('login/login');
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Welcome');
	}
}
