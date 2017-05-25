<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

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
	}

	public function index() { $data = $this->model->getData('tt_barang');
		$this->load->view('home', array('data' => $data));  }

	public function tambahCart() {
		$kode_barang = $_REQUEST['kd'];
		$barang = $this->model->getTasKD($kode_barang);
		//echo var_dump($barang);
		$data = array(
			'id'	=> $barang[0]['kode_barang'],
			'qty' 	=> 1,
			'price'	=> $barang[0]['harga_jual'],
			'name'	=> $barang[0]['kode_barang']
		);
		//echo '<br>'.$data['id'].$data['name'].$data['qty'].$data['price'].'<br>';
		$this->cart->insert($data);
		//echo $data['name'];
		//echo $this->cart->total();
		$this->lihatCart();
		//redirect(base_url());
	}

	public function lihatCart() {
		$this->load->view('keranjangBelanja');
	}

	public function hapusCart() {
		$this->cart->destroy();
		redirect(base_url());
	}
}