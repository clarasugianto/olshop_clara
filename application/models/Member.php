<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Model {

	function auth_member($username,$password){
		$passhash = SHA1($password);
		return $this->db->query("SELECT * FROM member WHERE email='$username' && password='$passhash' LIMIT 1");
	}
    function upTelepon($id_member,$telp){
        return $this->db->query("UPDATE member SET telepon='$telp' WHERE id_member='$id_member'");
    }
    function upAlamat($id_member,$alamat){
        return $this->db->query("UPDATE member SET alamat='$id_member' WHERE id_member='$alamat'");
    }
	function tambahUser($data){
		return $this->db->insert('member',$data);
	}
    function auth_memberfb($email){
        return $this->db->query("SELECT * FROM member WHERE email='$email' LIMIT 1");
    }
    function tambahDataFB($data){
        return $this->db->insert('member',$data);
    }
    function barang($id){
      return $this->db->query("SELECT * FROM produk WHERE id_produk='$id' ");
    }
    function tambah_keranjang($data){
      return $this->db->insert('keranjang',$data);
    }
    function showItem($limit,$start){
        $this->db->order_by("tanggal_post","ASC");
        return $this->db->get('produk',$limit,$start);
    }
    function getCart($id_member){
      $this->db->select('*');
      $this->db->from('keranjang');
      $this->db->join('produk','keranjang.id_produk=produk.id_produk');
      $this->db->where('id_member',$id_member);
      return $this->db->get();
    }
    function updateCart($stok,$id_member,$id_produk,$harga){
        $jumlah = count($id_produk);
        for ($i = 0; $i <$jumlah ; $i++) {
            $this->db->query("UPDATE keranjang SET jumlah='$stok[$i]',harga=jumlah*$harga[$i] WHERE id_produk='$id_produk[$i]' AND id_member='$id_member[$i]' ");
        }
    }
    function getRekom(){
     return $this->db->query("SELECT * FROM produk ORDER BY RAND() LIMIT 5");
    }
    function cari_produk($keyword){
      $jml =strlen($keyword);
    if ($jml > 0) {
      $this->db->select('*');
      $this->db->like('id_produk',$keyword)->or_like('nama_produk',$keyword);
      return $this->db->get('produk')->result_array();
    }else{
      return $this->db->get('produk')->result_array();
    }
    }
    function deleteCart($id_produk,$id_member){
        return $this->db->query("DELETE FROM keranjang WHERE id_produk='$id_produk' AND id_member='$id_member' ");
    }
    function destroyCart($where){
         return $this->db->delete('keranjang',$where);
    }
    function addTransaksi($id, $kd_trans,$id_produk,$harga,$stok,$total){
        $jumlah =count($total);
        for ($x = 0; $x <$jumlah; $x++) {
                $this->db->query("INSERT INTO transaksi(id_member,kode_transaksi,id_produk,harga,jumlah,total) VALUES ('$id_produk[$x]','$kd_trans[$x]','$id[$x]','$harga[$x]','$stok[$x]','$total[$x]') ");
        }
    }
    function addHeaderTransaksi($header_trx){
        return $this->db->insert('header_transaksi',$header_trx);
    }
    function getTrack($id){
        $this->db->select("*,SUM(total) AS jumlahe, COUNT(transaksi.id_produk) AS barang");
        $this->db->from('header_transaksi');
        $this->db->join('transaksi','header_transaksi.kode_transaksi=transaksi.kode_transaksi');
        $this->db->join('produk','transaksi.id_produk=produk.id_produk');
        $this->db->where('transaksi.id_member',$id);
        $this->db->group_by('transaksi.kode_transaksi');
        return $this->db->get()->result_array();
    }
    function showData($char){
        return $this->db->query("SELECT * FROM transaksi WHERE kode_transaksi='$char'");
    }
    function showOngkir($char){
        return $this->db->query("SELECT * FROM header_transaksi WHERE kode_transaksi='$char'");
    }
    function hitungHarga($id_member){
        return $this->db->query("SELECT SUM(harga) as total from keranjang WHERE id_member='$id_member'");
    }
    function hitungTotal($char){
        return $this->db->query("SELECT SUM(total) as total_semua,DATE_ADD(tanggal_transaksi,INTERVAL 1 DAY) as tenggat,kode_transaksi from transaksi WHERE kode_transaksi='$char' LIMIT 1");
    }
    function uploadBukti(){
    // }
    $config['upload_path']          = './upload/member/bukti/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->input->post('kode_transaksi');
    $config['overwrite']            = TRUE;
    $config['remove_space']         = TRUE;
    $config['max_size']             = '2048'; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('bukti')) {
        return $this->upload->data("file_name");
    }
    
    return "default.png";
    }
    function updateHeaderTransaksi($kode_transaksi,$rek_admin,$nama,$rek_member,$jumlah_bayar,$foto){
        return $this->db->query("UPDATE header_transaksi SET tanggal_pembayaran=NOW(),jumlah_bayar='$jumlah_bayar',rekening_pembayaran='$rek_admin',nama_pengirim='$nama',rekening_pelanggan='$rek_member',bukti_bayar='$foto' WHERE kode_transaksi='$kode_transaksi' ");
    }

}

/* End of file Member.php */
/* Location: ./application/models/Member.php */