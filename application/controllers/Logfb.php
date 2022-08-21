<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logfb extends CI_Controller {
	
	public function index()
	{
		if($this->facebook->is_authenticated()){
			$no =$this->db->query("SELECT id_member FROM member ORDER BY id_member DESC");
			$no_id=$no->row_array('id_member');
			$kd=$no_id['id_member'];
			$urut=substr($kd, 6,3);
			$tambah=(int)$urut+1;
			$bln=date("m");
			$thn=date("y");
			if (strlen($tambah)==1) {
				$format="J".$bln.$thn."00".$tambah;
			}else if(strlen($tambah)==2){
				$format="J".$bln.$thn."0".$tambah;
			}else{
				$format="J".$bln.$thn.$tambah;
			}
			$userProfile = $this->facebook->request('get', '/me?fields=id,name,first_name,last_name,email,locale,picture');
			$email=$userProfile['email'];
			$data = array(
				'id_member'=>$format,
				'nama'=>$userProfile['name'],
				'email'=>$userProfile['email'],
				'foto'=>'https://graph.facebook.com/'.$userProfile['id'].'/picture?type=large'
			);
			$hitung=$this->db->query("SELECT * FROM member WHERE email='$email' ");
			if($hitung->num_rows()>0){
				$this->facebook_login->login($email);
			}else{
				if ($this->member->tambahDataFB($data)) {
					redirect('logfb');
				}else{
					$this->session->set_flashdata('gagal', 'Gagal Login Facebook');
					redirect(base_url('login'),'refresh');
				}
			}

		}else
		{
			$data['authUrl'] =  $this->facebook->login_url();
			$this->load->view('user/login',$data);
		}
	}
	public function logout() {
		$this->facebook->destroy_session();
		redirect('/login');
	}
}

/* End of file Logfb.php */
/* Location: ./application/controllers/Logfb.php */