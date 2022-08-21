<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'page';
$route['login'] = 'logfb';
$route['logon'] = 'login';
$route['pay-procces'] = 'belanja/bayar';
$route['home/(:any)'] = 'page/home/$1';
$route['home'] = 'page/home';
$route['produk/(:any)'] = 'user/detail_produk/$1';
$route['cari'] = 'user/cari';
$route['search'] = 'user/cari_produk';
$route['register'] = 'page/daftar';
$route['logout'] = 'user/logout';
$route['cart']	='user/keranjang';
$route['check-out']	='page/cek_out';
$route['check-all']	='ongkir/getOngkir';
$route['payment-option/(:any)']	='page/transaksi/$1';
$route['update-address']	='user/updateAlamat';
$route['update-telp']	='user/updateTelp';
$route['privacy-police']	='page/privasi';
$route['order-history']	='page/riwayat_pesan';
$route['term']	='page/term';
$route['pay-cart']	='belanja/proses_transaksi';
$route['cart-update']	='belanja/update';
$route['jlb-login']	='page/smeaLogin';
$route['jlb-masuk']	='login_admin';
$route['jlb-dashboard']	='proses/login';
$route['cart/(:any)']	='belanja/hapus/$1';
$route['404_override'] = 'page';
$route['jlb/profile-member/(:any)'] = 'proses/edit/member/$1';
$route['product-delete/(:any)']	='belanja/hapus/$1';
$route['jlb-product'] = 'proses/daftarProduk';
$route['jlb-order'] = 'proses/riwayat_transaksi';
$route['jlb-stok'] = 'proses/stok';
$route['jlb/email-delivery/(:any)'] = 'proses/email/$1';
$route['jlb/detail-transaksi/(:any)'] = 'proses/edit/header_trx/$1';
$route['jlb-logout'] = 'login_admin/logout';
$route['jlb/product-edit/(:any)']	='proses/edit/produk/$1';
$route['translate_uri_dashes'] = TRUE;
