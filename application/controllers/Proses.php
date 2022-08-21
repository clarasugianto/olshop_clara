<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses extends CI_Controller {

	public function login(){
 			$data['res']=$this->admin->getUser();
			$this->load->view('admin/dashboard',$data);
	}
	public function riwayat_transaksi(){
		$data=$this->admin->getDaftarTransaksi();
		
		$this->load->view('admin/riwayattransaksi',array('res'=>$data));		
	}
	public function dashboard(){
		$data=$this->admin->getUser();
		
			$this->load->view('admin/dashboard',array('res'=>$data));
	}
	public function daftarProduk(){
		$data=$this->admin->getDaftarProduk();
		$this->load->view('admin/daftarProduk',array('res'=>$data));
	}
	public function stok(){
		$data=$this->admin->getDaftarProduk();
		$this->load->view('admin/stok',array('res'=>$data));
	}
	public function proses_daftar(){
		$nama = $this->input->post('id_produk'); 
		$no =$this->db->query("SELECT id_produk FROM produk WHERE id_produk LIKE '$nama%' ORDER BY id_produk DESC");
		$no_id=$no->row_array('id_produk');
		$kd=$no_id['id_produk'];
		if(strlen($nama)==3){
			$urut=substr($kd, 3,3);
		}else if(strlen($nama)==4){
			$urut=substr($kd, 4,3);
		}else if(strlen($nama)==5){
			$urut=substr($kd, 5,3);
		}else if(strlen($nama)==6){
			$urut=substr($kd, 6,3);
		}else if(strlen($nama)==7){
			$urut=substr($kd, 7,3);
		}else if(strlen($nama)==8){
			$urut=substr($kd, 8,3);
		}else if(strlen($nama)==9){
			$urut=substr($kd, 9,3);
		}
		
		$tambah=(int)$urut+1;
		if (strlen($tambah)==1) {
		  $format=$nama."00".$tambah;
		}else if(strlen($tambah)==2){
		  $format=$nama."0".$tambah;
		}else{
		  $format=$nama.$tambah;
		} 
    	$nama_produk=$this->input->post('nama_produk');
		$keterangan=$this->input->post('keterangan');
		$harga=$this->input->post('harga');
		$produk = $this->admin->uploadProduk();
		

		$where = array('id_produk' =>$format ,
						'nama_produk'=>$nama_produk,
						'keterangan'=>$keterangan,
						'harga'=>$harga,
						'id_gambar'=>$produk
					);
		
		$data=$this->admin->tambah('produk',$where);
		if ($data) {
			$data=$this->admin->getDaftarProduk();
			$this->session->set_flashdata('data','Data Berhasil Ditambahkan...');
			$this->load->view('admin/daftarproduk',array('res'=>$data));

			
		}
 
     }
	public function logout(){

		
		$this->session->sess_destroy();
		$this->load->view('admin/login');
	
	}
	public function edit($tabelName,$char){

		if ($tabelName=='produk') {
			# code...
		
		$where = array('id_produk' =>$char );
		$data=$this->admin->getDaftarProduk1($where,$tabelName);
		$this->load->view('admin/form_edit',array('res'=>$data));
	}elseif ($tabelName=="produk1") {
		$where = array('id_produk' =>$char );
		$data=$this->admin->getDaftarProduk1($where,'produk');
		$this->load->view('admin/edit_stok',array('res'=>$data));
	}elseif ($tabelName=="header_trx") {
		$where = array('header_trx.kode_transaksi' =>$char );
		$data=$this->admin->getDetailTrans($where);
		$this->load->view('admin/detail_transaksi',array('res'=>$data));
	}

	else{
		$where = array('id_member'=>$char);
		$data=$this->admin->getDaftarProduk1($where,$tabelName);
		$this->load->view('admin/form_editM', array('res' => $data ));
	}

	}
	public function delete($tabelName,$id){
		if ($id=='id_produk') {
		$where = array('id_produk' =>$id );
		$this->admin->hapus_data($where,$tabelName);
		redirect('proses/daftarProduk');
		}else{
			$where = array('id_produk' =>$id );
		$this->admin->hapus_data($where,$tabelName);
		redirect('jlb-product');
		}
		

	}

	public function update($tabelName){
		if ($tabelName=='produk') {
			# code...
		
		$id_gambar=$this->admin->upload();
		$id_produk=$this->input->post('id_produk');
		$kode_produk=$this->input->post('kode_produk');
		$nama_produk=$this->input->post('nama_produk');
		$keterangan=$this->input->post('keterangan');
		$harga=$this->input->post('harga');

		$data = array('kode_produk' =>$kode_produk ,
						'nama_produk'=>$nama_produk,
						'keterangan'=>$keterangan,
						'harga'=>$harga,
						'id_gambar'=>$id_gambar,);

		$where=array('id_produk'=>$id_produk);

		$this->admin->update_data('produk',$data,$where);
		redirect('proses/daftarProduk');
		}elseif ($tabelName=='member') {

		$id_member=$this->input->post('id_member');
		$foto=$this->input->post('foto');
		$nama=$this->input->post('nama');
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$telepon=$this->input->post('telepon');
		$alamat=$this->input->post('alamat');
		$status_pelanggan=$this->input->post('status_pelanggan');
		$sex=$this->input->post('sex');
		$hak_akses=$this->input->post('hak_akses');
		$tanggal_daftar=$this->input->post('tanggal_daftar');

		$data=array(
				'foto'=>$foto,
				'nama'=>$nama,
				'email'=>$email,
				'password'=>$password,
				'telepon'=>$telepon,
				'alamat'=>$alamat,
				'status_pelanggan'=>$status_pelanggan,
				'sex'=>$sex,
				'hak_akses'=>$hak_akses,
				'tanggal_daftar'=>$tanggal_daftar
			);

		$where=array('id_member'=>$id_member);

		$this->admin->update_data('member',$data,$where);
		redirect('proses/dashboard');
		}else{

		$id_gambar=$this->input->post('id_gambar');
		$id_produk=$this->input->post('id_produk');
		
		$stok=$this->input->post('stok');
		
		$data = array(
			'stok'=>$stok
						);

		$where=array('id_produk'=>$id_produk);

		$this->admin->update_data('produk',$data,$where);
		redirect('proses/stok');
		}
	}


		public function status_pelanggan(){


		
		
		
		$id_siswa = $this->input->post('id_member');
		$password = $this->input->post('status_pelanggan');
		
		$data  = array('status_pelanggan'=>'1', 
						
						);

	

		$where=array('id_member'=>$id_siswa);

		$cek=$this->admin->update_data('member',$data,$where);
		
		
		$data=$this->admin->getUser();
		
		$this->load->view('admin/dashboard',array('res'=>$data));
		 
		}
		public function status_bayar(){
			$kode_transaksi=$this->input->post('kode_transaksi');
		$where=array('kode_transaksi'=>$kode_transaksi);
		if ((int)$this->input->post('status')==1) {
			$data = array(
				'status_bayar'=>$this->input->post('status')
			);
			$stok=$this->input->post('stok');
		$id_produk=$this->input->post('id_produk');
		
		$this->admin->update_data('header_transaksi',$data,$where);
		$this->admin->updateStok($id_produk,$stok);
		redirect('proses/riwayat_transaksi');
		}else{
		redirect('proses/riwayat_transaksi');
		}
		
			
		}

		public function email($char){
			$data['email'] = $this->admin->cek_user($char);
			$data['barang'] = $this->admin->cek_barang($char);
			$this->load->view('admin/email',$data);
		}
		function sendEmail(){
			$resi = $this->input->post('resi');
			$faktur = $this->input->post('kode_transaksi');
			$produkN = $this->input->post('produk_name');
			$nama = $this->input->post('nama');
			$telepon = $this->input->post('telepon');
			$email = $this->input->post('email');
			$alamat = $this->input->post('alamat');
			$kurir = $this->input->post('kurir');
			$this->admin->updateHeader($resi,$faktur);
			$this->send_email->kirim_sukses($alamat,$resi,$faktur,$telepon,$produkN,$nama,$email,$kurir);
			redirect(base_url('jlb-order'));
		}
	}








