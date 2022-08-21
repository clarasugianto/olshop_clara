<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ongkir extends CI_Controller {

      public function __construct()
    {
        parent::__construct();
        $this->load->model('raja_ongkir');
    }


    public function getCity($province_id = 0)
    {
        if ($province_id == 0) {
            return false;
        }
        else {            
            return $this->raja_ongkir->getCityData($province_id);
        }
    }

    public function getOngkir(){
        $city_id = $this->input->post('id_kota');
        $this->session->userdata('id_kota');
        $this->session->set_userdata('id_kota', $city_id);
        $ongkir = $this->raja_ongkir->setOngkir($city_id);
        $city = $this->raja_ongkir->getCityData();
        $province = $this->raja_ongkir->getProvinceData();
        $province['province'] = $province["rajaongkir"]["results"];
        $data['city'] = $city["rajaongkir"]["results"];
        $data['ongkir'] = $ongkir["rajaongkir"]["results"];
        $id_member=$this->session->userdata('id');
        $data['qry'] =  $this->member->hitungHarga($id_member)->row_array();
        $data['produk'] = $this->member->getCart($id_member)->result_array();
        $this->load->view('user/cek_out', $data);
        $this->load->view('template/footer',$data); 

    }


}

/* End of file Shipping.php */
/* Location: ./application/controllers/Shipping.php */