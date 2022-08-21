<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('send_email');
	}

	function keranjang(){
		$id_member=$this->session->userdata('id');
		$data['rekom'] = $this->member->getRekom()->result_array();
		$data['produk'] = $this->member->getCart($id_member)->result_array();
		$this->load->view('user/keranjang',$data);
		$this->load->view('template/footer', $data);
	}
	
	public function logout() {
		
		if($this->facebook->is_authenticated()){
			$this->facebook->destroy_session();
			$this->user_login->logout();
		}else{
			$this->user_login->logout();
		}
	}

	function register(){
		$this->form_validation->set_rules('namad', 'Nama', 'required',array(
			'required'=>"Nama Tidak Boleh Kosong"));
		$this->form_validation->set_rules('namab', 'Nama', 'required',array(
			'required'=>"Nama Tidak Boleh Kosong"));
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email',array(
			'required'=>"Email Tidak Valid"));
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
		$this->form_validation->set_rules('password2', 'Password', 'required|matches[password]',array(
			'required'=>"Kata Sandi Tidak Sama"));
		$this->form_validation->set_rules('telp', 'No Hp', 'required|min_length[10]|max_length[12]|is_numeric',array(
			'required'=>"No Hp Tidak Boleh Kosong",
			'is_numeric'=>"Hanya Bisa Diisi Angka"));
		$this->form_validation->set_rules('alamat', 'Alamat', 'required',array(
			'required'=>"Alamat Tidak Boleh Kosong"));
		if($this->form_validation->run()==FALSE){
			$this->load->view('user/register');
		}else{
			$id_member = $this->input->post("id");
			$nama = $this->input->post("namad").' '.$this->input->post('namab');
			$email = $this->input->post("email");
			$password = SHA1($this->input->post("password"));
			$telp = $this->input->post("telp");
			$alamat = $this->input->post("alamat");
			$date = date("Y-m-d H:i:s");

			$data = array(
				'id_member'=>$id_member,
				'nama'=>$nama,
				'email'=>$email,
				'password'=>$password,
				'telepon'=>$telp,
				'alamat'=>$alamat,
				'tanggal_daftar'=>$date
			);

			$cekemail = $this->db->query("SELECT * FROM member WHERE email ='$email' ");
			$cekhp = $this->db->query("SELECT * FROM member WHERE telepon = '$telp' ");
			if ($cekemail->num_rows()>0) {
				$this->session->set_flashdata('gagal', 'Email Anda Sudah Terdaftar');
				$this->load->view('user/register');
			}else{
				if ($cekhp->num_rows()>0) {
					$this->session->set_flashdata('gagal', 'No HP Anda Sudah Terdaftar');
					$this->load->view('user/register');	
				}else{
					if ($this->member->tambahUser($data)) {
						if($this->send_email->sendMail($email,$nama)){
							$this->session->set_flashdata('sukses', 'Pendaftaran Berhasil, Anda Akan Menerima Email Aktivasi Akunm Harap Periksa Juga Folder SPAM anda!');
							redirect('home');
						}
					}
				}
			}
		}

	}
	function verify($hash=NULL){
		if($this->send_email->verify($hash)){
			$this->session->set_flashdata('sukses', "Email sukses diverifikasi!");
			redirect('user');
		} else {
			$this->session->set_flashdata('gagal', "Email gagal terverifikasi");
			redirect('user');
		}
	}
	function detail_produk($char){
		$id = $char;
		$data['produk'] = $this->member->barang($id)->row_array();
		$this->load->view('user/item',$data);
	}
	function addCart(){
			$jumlah = $this->input->post('jumlah');
			$total = $this->input->post('total2');
			$id_produk = $this->input->post('id_produk');
			$id_member = $this->input->post('id_member');
			$data = array(
				'id_member' => $id_member,
				'id_produk'	=> $id_produk,
				'jumlah'	=> $jumlah,
				'harga'		=> $total
			);
			// if($total == 0){
			// 	$this->session->set_flashdata('gagal', 'Pastikan Jumlah Tidak Melebihi Stok');
			// 	redirect(base_url('produk/'.$id_produk));
			// }else{
				$this->member->tambah_keranjang($data);
				redirect(base_url('produk/'.$id_produk));
			// }
	}
	function cari_produk(){
		$keyword = $this->input->get('search',TRUE);
		$data['item'] = $this->member->cari_produk($keyword);
		$data['pagination'] = $this->pagination->create_links();
		$this->load->view('user/home',$data);
		$this->load->view('template/footer', $data);
	}
	function cari(){
		$keyword = $this->input->get('cari',TRUE);
		$data['item'] = $this->member->cari_produk($keyword);
		$data['pagination'] = $this->pagination->create_links();
		$this->load->view('home/homepage',$data);
		$this->load->view('template/footer', $data);
	}
	function updateAlamat(){
		$id_member=$this->session->userdata('id');
		$alamat = $this->input->post('alamat');
		$this->member->upAlamat($alamat,$id_member);
		redirect(base_url('check-out'),'refresh');
	}
	function updateTelp(){
		$id_member=$this->session->userdata('id');
		$telp = $this->input->post("telp");
		$this->member->upTelepon($id_member,$telp);
		redirect(base_url('check-out'),'refresh');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */