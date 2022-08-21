<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	 public function __construct()
    {
        parent::__construct();
        $this->load->model('raja_ongkir');
    }
    
	public function index()
	{
		$this->load->library('pagination');
		
		$config['base_url'] = base_url();
		$config['total_rows'] = $this->db->count_all('produk');
		$config['per_page'] =15;
		$config['uri_segment'] = 1;
		$choice = $config["total_rows"] / $config["per_page"];
		$config['num_links'] = floor($choice);

		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Prev';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';
		
		$this->pagination->initialize($config);
		
		$data['page']= ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;

		$data['item']= $this->member->showItem($config["per_page"],$data['page'])->result_array();
		$data['pagination'] = $this->pagination->create_links();
		$this->load->view('home/homepage',$data);
	}
	function privasi(){
		$this->load->view('user/privasi/privasi');
		$this->load->view('template/footer');
	}
	function term(){
		$this->load->view('user/privasi/syarat_ketentuan');
	}
	function home(){
		$this->load->library('pagination');
		
		$config['base_url'] = base_url('home');
		$config['total_rows'] = $this->db->count_all('produk');
		$config['per_page'] = 15;
		$config['uri_segment'] = 2;
		$choice = $config["total_rows"] / $config["per_page"];
		$config['num_links'] = floor($choice);

		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Prev';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';
		
		$this->pagination->initialize($config);
		
		$data['page']= ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;

		$data['item']= $this->member->showItem($config["per_page"],$data['page'])->result_array();
		$data['pagination'] = $this->pagination->create_links();
		
		$this->load->view('user/home',$data);
		$this->load->view('template/footer', $data);
	}
	function daftar(){
		$this->load->view('user/register');
	}
	function cek_out(){
		$city = $this->raja_ongkir->getCityData();
        $province = $this->raja_ongkir->getProvinceData();
        $province['province'] = $province["rajaongkir"]["results"];
        $data['city'] = $city["rajaongkir"]["results"];
		$id_member=$this->session->userdata('id');
		$data['qry'] =  $this->member->hitungHarga($id_member)->row_array();
		$data['produk'] = $this->member->getCart($id_member)->result_array();
		$this->load->view('user/cek_out',$data);
		$this->load->view('template/footer',$data);	
	}
	function riwayat_pesan(){
		$id=$this->session->userdata('id');
		$data['detail']=$this->member->getTrack($id);
		$this->load->view('user/order_history',$data);
		$this->load->view('template/footer',$data);	
	}
	function transaksi($char){
		$data['item']=$this->member->showData($char)->result_array();
		$data['qry']=$this->member->hitungTotal($char)->row_array();
		$data['qry1']=$this->member->showOngkir($char)->row_array();
		$this->load->view('user/transaksi',$data);
		$this->load->view('template/footer',$data);
	}
	function smeaLogin(){
		$this->load->view('admin/login');
	}

}

/* End of file Page.php */
/* Location: ./application/controllers/Page.php */