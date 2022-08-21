<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facebook_login
{
	protected $CI;

	public function __construct()
	{
		$this->CI =& get_instance();
		$this->CI->load->model('member');
	}

	public function login($email){
		$check = $this->CI->member->auth_memberfb($email);
		if ($check->num_rows()>0) {
			$data = $check->row_array();
			$this->CI->session->set_userdata('masuk',TRUE);
			$this->CI->session->set_userdata('name',$data['nama']);
			$this->CI->session->set_userdata('email',$data['email']);
			$this->CI->session->set_userdata('id',$data['id_member']);
			$this->CI->session->set_userdata('foto',$data['foto']);
			redirect(base_url('home'),'refresh');
		}
	}
	

}

/* End of file User_login.php */
/* Location: ./application/libraries/User_login.php */
