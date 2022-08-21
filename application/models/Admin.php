<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model {

	function auth_admin($username,$password){
		$passhash = SHA1($password);
		return $this->db->query("SELECT * FROM admin WHERE jenengmu='$username' && password='$passhash' LIMIT 1");
	}

	public function tambah($tabelName,$data){
		$res=$this->db->insert($tabelName,$data);
		return $res;
	}
	public function getDaftarProduk(){
		$data=$this->db->query('select * from produk ');
		return $data->result_array();
	}
	public function getDaftarTransaksi(){
		$this->db->select("*");
		$this->db->from('header_trx');
		$this->db->join('trx','trx.kode_transaksi=header_trx.kode_transaksi');
		$this->db->group_by('trx.kode_transaksi');
		return $this->db->get()->result_array();
	}
	public function getDaftarProduk1($where,$tabelName){
		$res=$this->db->get_where($tabelName,$where);	
		return $res->result_array();
	}
	public function getUser(){
		$data=$this->db->query('select * from member ');
		return $data->result_array();
	}
	public function add_siswa($tabelName,$data){
		$data=$this->db->insert($tabelName,$data);
		return $data;
	}	
	public function update_data($tabelName,$data_update,$where){
		$this->db->where($where);
		$res=$this->db->update($tabelName,$data_update);
		return $res;
	}
	public function getId($tabel,$id){
		$res=$this->db->get_where($tabel,$id);
		return $res->row_array();
	}
	function hapus_data($where,$tabelName){
		$this->db->where($where);
		$this->db->delete($tabelName);
	}
	function updateStok($id_produk,$stok){
		$jumlah = count($id_produk);
        for ($i = 0; $i <$jumlah ; $i++) {
            $this->db->query("UPDATE produk SET stok=stok-'$stok[$i]' WHERE id_produk='$id_produk[$i]' ");
        }
	}
	function cek_user($char){
		$this->db->select("*,COUNT(trx.id_produk) AS barang");
		$this->db->from('header_trx');
		$this->db->join('member','header_trx.id_member=member.id_member');
		$this->db->join('trx','header_trx.kode_transaksi=trx.kode_transaksi');
		$this->db->join('produk','produk.id_produk=trx.id_produk');
		$this->db->where('header_trx.kode_transaksi',$char);
		return $this->db->get()->result_array();
	}
	 public function uploadProduk(){
       // }
    $config['upload_path']          = './upload/admin/produk/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->input->post('id_produk');
    $config['overwrite']            = TRUE;
    $config['remove_space']         = TRUE;
    $config['max_size']             = '2048'; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

   	if ($this->upload->do_upload('produk')) {
        return $this->upload->data("file_name");
    }
    
    return "default.png";

  }
  function cek_barang($char){
  	$this->db->select("*");
  	$this->db->from('trx');
  	$this->db->join('produk','trx.id_produk=produk.id_produk');
  	$this->db->where('kode_transaksi',$char);
  	return $this->db->get()->result_array();
  }
  function getDetailTrans($where){
  	$this->db->select('*,SUM(trx.total) as sub_total');
  	$this->db->from('header_trx');
  	$this->db->join('trx','header_trx.kode_transaksi=trx.kode_transaksi');
  	$this->db->join('produk','produk.id_produk=trx.id_produk');
  	$this->db->where($where);
  	$this->db->group_by('trx.kode_transaksi');
  	return $this->db->get()->result_array();
  }
  function updateHeader($resi,$faktur){
  	$this->db->where('kode_transaksi',$faktur);
  	return $this->db->update('header_transaksi',array('no_resi'=>$resi));
  }


}

/* End of file Admin.php */
/* Location: ./application/models/Admin.php */