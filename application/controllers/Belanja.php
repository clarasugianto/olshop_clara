<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belanja extends CI_Controller {

	public function index()
	{		
			$total = $this->input->post('total2');
			$id_produk = $this->input->post('id_produk');
			$id_member = $this->input->post('id_member');
			$data = array(
				'id_member' => $id_member,
				'id_produk'	=> $id_produk,
				'jumlah'	=> '1',
				'harga'		=> $total
			);
				$this->member->tambah_keranjang($data);
				redirect(base_url('produk/'.$id_produk));
	}
	public function hapus($char){
		$id_produk = $char;
		$id_member = $this->session->userdata('id');
		$this->member->deleteCart($id_produk,$id_member);
		redirect(base_url('cart'),'refresh');
	}
	function update(){
		$stok = $this->input->post('stok');
		$harga = $this->input->post('harga');

		$id_produk = $this->input->post('id_produk');
		$id_member = $this->input->post('id_member');
		$this->member->updateCart($stok,$id_member,$id_produk,$harga);
		redirect(base_url('cart'),'refresh');
	}
	function proses_transaksi(){
		$kd_trans = $this->input->post('kode_transaksi');
		$ongkir = $this->input->post('ongkir');
		$id_member =  $this->input->post('id_member');
		$kode_transaksi = $this->input->post('kd_trans');
		$id =  $this->input->post('id');
		$harga =  $this->input->post('harga');
		$stok =  $this->input->post('stok');
		$id_produk =  $this->input->post('id_produk');
		$total = $this->input->post('total');
		
		$header_trx =array(
			'ongkir' 		=> $ongkir,
			'kode_transaksi' => $kd_trans,
			'id_member'	=> $id_member,
			'kurir' 	=> "JNE"
		);
		$where = array(
			'id_member' => $id_member
		);
		if($this->member->addHeaderTransaksi($header_trx)){
			$this->member->addTransaksi($id_produk, $kode_transaksi,$id,$harga,$stok,$total);
		$this->member->destroyCart($where);
		redirect(base_url('payment-option/'.$kd_trans),'refresh');
		}
		
	}
	function bayar(){
		$kode_transaksi = $this->input->post('kode_transaksi');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('norek_send', 'Rekening Pengirim', 'required|numeric');
		$this->form_validation->set_rules('uang', 'Total Bayar', 'required|numeric');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('gagal', 'Bidang Wajib Diisi');
			redirect(base_url('payment-option/'.$kode_transaksi));
		} else {
			$rek_admin = $this->input->post('rek_bayar');
			$nama  	=$this->input->post('nama');
			$rek_member	=	$this->input->post('norek_send');
			$jumlah_bayar=	$this->input->post('uang');
		 	$foto = $this->member->uploadBukti();
		 	$this->member->updateHeaderTransaksi($kode_transaksi,$rek_admin,$nama,$rek_member,$jumlah_bayar,$foto);
		 	$this->session->set_flashdata('sukses', 'Pembayaran Anda Sedang Di Verifikasi Oleh Admin Kami, harap tunggu hingga 2x24 jam untuk proses verifikasi.<br>Anda Akan Mendapatkan Email Jika Barang Sudah Dikirim');
		 	redirect(base_url('home'),'refresh');
		}
		
		

	}

}

/* End of file Belanja.php */
/* Location: ./application/controllers/Belanja.php */