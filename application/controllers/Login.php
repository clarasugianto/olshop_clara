<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('username', 'Email', 'required',array('required'=>'E-mail harus diisi'));
		$this->form_validation->set_rules('password', 'password', 'required',array('required'=>'Password harus diisi'));

		if ($this->form_validation->run()) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->user_login->login($username,$password);
		}else{
			$this->load->view('user/login');
		}
	}
	function logout(){
		$this->user_login->logout();
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */