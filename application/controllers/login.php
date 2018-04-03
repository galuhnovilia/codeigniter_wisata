<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$username=$this->session->userdata('username');
		if(empty($username))
	{
		$this->load->view('tampilan_login');
	}
	else{
		redirect('home');
	}
		
	}

	public function getlogin()
	{
		$u=$this->input->post('username');
		$p=$this->input->post('password');
		$this->load->model('model_login');
		$this->model_login->getlogin($u,$p);
	}
}
