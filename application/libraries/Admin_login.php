<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login
{
	protected $CI;

	public function __construct()
	{
		$this->CI =& get_instance();
		$this->CI->load->model('admin');
	}

	public function login($username,$password){
		$check = $this->CI->admin->auth_admin($username,$password);
		if ($check->num_rows()>0) {
			$data = $check->row_array();
			$this->CI->session->set_userdata('mlebu',TRUE);
			$this->CI->session->set_userdata('name',$data['nama']);
			$this->CI->session->set_userdata('user',$data['jenengmu']);
			$this->CI->session->set_userdata('akses',$data['hak_akses']);
			redirect(base_url('jlb-dashboard'),'refresh');
		}else{
			$this->CI->session->set_flashdata('gagal', 'Pengguna Belum Terdaftar');
			redirect(base_url('jlb-login'),'refresh');
		}
	}
	public function cek_login(){
		if ($this->CI->session->userdata('mlebu')!= TRUE) {
			$this->CI->session->set_flashdata('gagal', 'Anda Belum Login');
			redirect(base_url('jlb-login'),'refresh');
		}
	}
	public function logout(){
		$this->CI->session->unset_userdata('masuk');
		$this->CI->session->unset_userdata('akses');
		$this->CI->session->unset_userdata('name');
		$this->CI->session->unset_userdata('user');
		$this->CI->session->set_flashdata('gagal', 'Sukses Logout');
		redirect(base_url('jlb-login'),'refresh');
	}
	

}

/* End of file User_login.php */
/* Location: ./application/libraries/User_login.php */
