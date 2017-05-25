<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

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
		{
			redirect(base_url());
		}
		$this->load->model('modelOrders');
		$this->load->model('model');
	}
	
	public function index()
	{
		$is_processed = $this->modelOrders->process();
		if($is_processed){
			$this->cart->destroy();
			echo "<script>alert(Terima kasih<br>Pesanan Anda sedang diproses<br>Anda dapat melanjutkan untuk membayar pesanan Anda)</script>";
			$data = $this->model->getData('tt_barang');
			$this->load->view('home', array('data' => $data)); 
			echo "<script>alert('Terima kasih :). Pesanan Anda sedang diproses. Bila Anda telah membayar pesanan Anda, silahkan isi Konfirmasi Pembayaran')</script>";
		} else {
			$this->session->set_flashdata('error','Failed to processed your order, please try again!');
			redirect('cart/lihatCart');
		}
	}

	public function success()
	{
		$this->load->view('order_success');
	}

	public function buka_konfirm_bayar() { 
		$this->load->view('konfirm_bayar'); 
	}
	public function buka_log_transaksi() {
		$user = $this->session->userdata('username');
        $data['history'] = $this->modelOrders->get_log_transaksi($user);
		$this->load->view('log_transaksi', $data); 
	}

	public function isi_konfirm_bayar($kode_invoice = 0){

			$kode_invoice = $_POST['kode_invoice'];
			$amount = $_POST['jumlah'];

            $isValid = $this->modelOrders->konfirm_invoice(set_value('kode_invoice'), set_value('jumlah'));

            if($isValid){
                $this->session->set_flashdata('message','Terima kasih. Kami akan mengecheck pembayaran Anda');
                $this->buka_log_transaksi();
            } else {
                //$this->session->set_flashdata('error','Wrong amount or invoice ID, please try again');
                $this->load->view('konfirm_bayar');	
            }    
        
	}
}