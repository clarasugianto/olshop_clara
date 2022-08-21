<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

	public function index()
	{
		$resi = '82372378347';
		$faktur = 'JLB-424234-3422';
		$produkN = 'Headset';
		$nama = 'yayak';
		$telepon = '08123323';
		$email = 'yayak.pasgujati@gmail.com';
		$alamat = 'Ds. Besole Kec. Besuki';
		$kurir = 'JNE';
		$this->send_email->kirim_sukses($alamat,$resi,$faktur,$telepon,$produkN,$nama,$email,$kurir);
	}
	function sendEmail(){
		$nama='yayak';
		$email='zaidanul.hakim12@gmail.com';
		$this->send_email->sendMail($nama,$email);
	}
	function cek(){
		$this->load->view('cek');
	}
	function cek_bos(){
		$stok=$this->input->post('stok');
		$id_produk=$this->input->post('id_produk');
		$this->admin->updateStok($id_produk,$stok);
		redirect(base_url('email/cek'),'refresh');
	}

}

/* End of file Email.php */
/* Location: ./application/controllers/Email.php */