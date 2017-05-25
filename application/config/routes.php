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
$route['default_controller'] = 'welcome';
$route['adm-ganti-pwd'] = 'WelcomeAdm/adm_ganti_pwd';
$route['adm-ganti'] = 'WelcomeAdm/update_pwd';
$route['adm-data-user'] = 'WelcomeAdm/adm_data_user';
$route['adm-data-tas-promo'] = 'tasAdm/adm_tas_promo';
$route['adm-data-tas-wanita'] = 'tasAdm/adm_tas_wanita';
$route['adm-data-tas-pria'] = 'tasAdm/adm_tas_pria';
$route['adm-data-tas-anak'] = 'tasAdm/adm_tas_anak';
$route['adm-data-tas-make-up'] = 'tasAdm/adm_tas_make_up';
$route['adm-statis-penjualan'] = 'WelcomeAdm/adm_statis_penjualan';
$route['adm-cara-pesan'] = 'WelcomeAdm/adm_cara_pesan';
$route['adm-faq'] = 'WelcomeAdm/adm_faq';
$route['adm-no-resi'] = 'WelcomeAdm/adm_no_resi';
$route['adm-konfirm'] = 'WelcomeAdm/adm_konfirm';

$route['adm-delete-tas'] = 'tasAdm/delete_tas';
$route['adm-delete-user'] = 'WelcomeAdm/delete_user';
$route['adm-undelete-user'] = 'WelcomeAdm/undelete_user';

$route['tambah_cart'] = 'cart/tambahCart';
$route['keranjang'] = 'cart/lihatCart';
$route['clear_cart'] = 'cart/hapusCart';
$route['checkout'] = 'order/index';

$route['signin'] = 'login/signin';
$route['login'] = 'login/login';
$route['logout'] = 'login/logout';
$route['signup'] = 'login/signup';
$route['registrasi'] = 'Welcome/isi_signup';
$route['cara_pesan'] = 'Welcome/buka_cp';
$route['home'] = 'Welcome/index';
$route['tas_semua'] = 'tas/buka_tas_semua';
$route['tas_semua_murah'] = 'tas/buka_tas_semua_murah';
$route['tas_semua_mahal'] = 'tas/buka_tas_semua_mahal';
$route['tas_wanita'] = 'tas/buka_tas_wanita';
$route['tas_wanita_murah'] = 'tas/buka_tas_wanita_murah';
$route['tas_wanita_mahal'] = 'tas/buka_tas_wanita_mahal';
$route['tas_pria'] = 'tas/buka_tas_pria';
$route['tas_pria_murah'] = 'tas/buka_tas_pria_murah';
$route['tas_pria_mahal'] = 'tas/buka_tas_pria_mahal';
$route['tas_anak'] = 'tas/buka_tas_anak';
$route['tas_anak_murah'] = 'tas/buka_tas_anak_murah';
$route['tas_anak_mahal'] = 'tas/buka_tas_anak_mahal';
$route['tas_make_up'] = 'tas/buka_tas_make_up';
$route['tas_mu_mahal'] = 'tas/buka_tas_make_up_mahal';
$route['tas_mu_murah'] = 'tas/buka_tas_make_up_murah';
$route['tas_promo'] = 'tas/buka_tas_promo';
$route['tas_promo_murah'] = 'tas/buka_tas_promo_murah';
$route['tas_promo_mahal'] = 'tas/buka_tas_promo_mahal';
$route['faq'] = 'Welcome/buka_faq';
$route['konfirm_bayar'] = 'order/buka_konfirm_bayar';
$route['isi_konfirm_bayar'] = 'order/isi_konfirm_bayar';
$route['log_transaksi'] = 'order/buka_log_transaksi';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;