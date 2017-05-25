<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcomeAdm extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
			parent::__construct();
			if(!$this->session->userdata('username'))
			redirect(base_url());
			//untuk bikin dari view manggil model 'My_Model.php'
			$this->load->model('model');
			$this->load->model('modelOrders');
	}

	public function index() { 
		$this->load->view('adm/home'); 
	}

	public function adm_ganti_pwd() {
		$this->load->view('adm/ganti-pwd');
	}

	public function delete_user(){
		$username = $this->input->post('username');
		$updateStatus = array("privileges"=>-1);
		$this->model->update_inactive_user($username, $updateStatus);
		$this->adm_data_user();
		echo "<script>alert('User berhasil di non aktifkan')</script>";
	}

	public function undelete_user(){
		$username = $this->input->post('username');
		$updateStatus = array("privileges"=>0);
		$this->model->update_inactive_user($username, $updateStatus);
		$this->adm_data_user();
		echo "<script>alert('User berhasil di aktifkan')</script>";
	}

	public function update_pwd()
	{
		$username = $this->input->post('username');
		$passLama = $this->input->post('passLama');
		$passBaru = $this->input->post('passBaru');
		$isLogin = $this->model->login_authen($username, $passLama);
		if($isLogin) {
			$updateStatus=array("password"=>$passBaru);
			$this->model->update_data_login($username, $passLama, $updateStatus);
			echo "<script>alert('Password berhasil diganti')</script>";
		}
		else {
			echo "<script>alert('Password salah')</script>";
		}
		$this->load->view('adm/ganti-pwd');
	}

	public function adm_data_user() {
		$data = $this->model->getUser();
		$this->load->view('adm/data-user', array('data' => $data)); 
	}

	public function adm_statis_penjualan() {
		$this->load->view('adm/statis-penjualan'); 
	}
	public function adm_cara_pesan(){ 
		$data = $this->model->getData('tt_cara_pesan');
		$this->load->view('adm/cara-pesan', array('data' => $data));
	}
	public function adm_faq(){ 
		$data = $this->model->getData('tt_faq');
		$this->load->view('adm/faq', array('data' => $data));
	}
	public function adm_konfirm(){ 
		$data['tt_invoice'] = $this->modelOrders->all();
		$this->load->view('adm/konfirm-bayar', $data);  
	}

	public function insert_resi()
	{ 	
		$arrI = array(
			'tanggal' => $this->input->post('tanggal'),
			'nama' => $this->input->post('nama'),
			'kurir' => $this->input->post('kurir'),
			'nomor_resi' => $this->input->post('resi')
			);
			$qryI = $this->model->insertBarang('tt_nomor_resi',$arrI);
			if ($qryI >= 1) { $this->adm_no_resi(); }		
	}

	public function insert_cara_pesan()
	{ 	
		$totalCP = $this->model->getTotalData('tt_cara_pesan');
		$totalCP++;
		
		$arrI = array(
			'no' => $totalCP,
			'judul' => $this->input->post('judul'),
			'isi' => $this->input->post('isi')
			);
			$qryI = $this->model->insertBarang('tt_cara_pesan',$arrI);
			if ($qryI >= 1) { $this->adm_cara_pesan(); }		
	}

	public function insert_faq()
	{ 	
		$totalF = $this->model->getTotalData('tt_faq');
		$totalF++;
		
		$arrI = array(
			'no' => $totalF,
			'judul' => $this->input->post('judul'),
			'isi' => $this->input->post('isi')
			);
			$qryI = $this->model->insertBarang('tt_faq',$arrI);
			if ($qryI >= 1) { $this->adm_faq(); }		
	}

	public function detail_invoice()
	{
		$kode_invoice = $_POST['kode'];
		$data['invoice'] = $this->modelOrders->get_invoice_by_id($kode_invoice);
		$data['kode_invoice'] = $kode_invoice;
        $data['tt_pesanan']  = $this->modelOrders->get_orders_by_invoice($kode_invoice);
		$this->load->view('adm/detail_invoice', $data);
	}
}