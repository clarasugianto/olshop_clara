<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_login
{
	protected $CI;

	public function __construct()
	{
		$this->CI =& get_instance();
		$this->CI->load->model('member');
	}

	public function login($username,$password){
		$check = $this->CI->member->auth_member($username,$password);
		if ($check->num_rows()>0) {
			$data = $check->row_array();
			$this->CI->session->set_userdata('masuk',TRUE);
			$this->CI->session->set_userdata('name',$data['nama']);
			$this->CI->session->set_userdata('id',$data['id_member']);
			$this->CI->session->set_userdata('akses',$data['hak_akses']);
			$this->CI->session->set_userdata('email',$data['email']);
			$this->CI->session->set_userdata('foto',$data['foto']);
			redirect(base_url('home'),'refresh');
		}else{
			$this->CI->session->set_flashdata('gagal', 'Pengguna Belum Terdaftar');
			redirect(base_url('login'),'refresh');
		}
	}
	public function cek_login(){
		if ($this->CI->session->userdata('masuk') != TRUE) {
			$this->CI->session->set_flashdata('gagal', 'Anda Belum Login');
			redirect(base_url('login'),'refresh');
		}
	}
	public function logout(){
		$this->CI->session->unset_userdata('masuk');
		$this->CI->session->unset_userdata('name');
		$this->CI->session->unset_userdata('id');
		$this->CI->session->unset_userdata('email');
		$this->CI->session->unset_userdata('foto');
		$this->CI->session->unset_userdata('id_kota');
		$this->CI->session->set_flashdata('gagal', 'Sukses Logout');
		redirect(base_url(),'refresh');
	}
	

}

/* End of file User_login.php */
/* Location: ./application/libraries/User_login.php */
