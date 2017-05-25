<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tas extends CI_Controller {

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
			//if(!$this->session->userdata('username'))
			//redirect(base_url());
			//untuk bikin dari view manggil model 'My_Model.php'
			$this->load->model('model');
	}

	public function index() { $data = $this->model->getData('tt_barang');
		$this->load->view('home', array('data' => $data));  }

	public function buka_tas_semua() { 
		$data = $this->model->getData('tt_barang');
		$this->load->view('tas_semua', array('data' => $data)); 
	}

	public function buka_tas_semua_murah() { $data = $this->model->getTasOrderby('tt_barang', 'harga_jual', 'asc'); $this->load->view('tas_semua', array('data' => $data)); }
	public function buka_tas_semua_mahal() { $data = $this->model->getTasOrderby('tt_barang', 'harga_jual', 'desc'); $this->load->view('tas_semua', array('data' => $data)); }

	public function buka_tas_wanita() { 
		$data = $this->model->getTas('Wan');
		$this->load->view('tas_wanita', array('data' => $data)); 
	}

	public function buka_tas_wanita_murah() { $data = $this->model->getTasOrderbyKategori('tt_barang', 'harga_jual', 'asc', 'Wan'); $this->load->view('tas_wanita', array('data' => $data)); }
	public function buka_tas_wanita_mahal() { $data = $this->model->getTasOrderbyKategori('tt_barang', 'harga_jual', 'desc', 'Wan'); $this->load->view('tas_wanita', array('data' => $data)); }

	public function buka_tas_pria() { 
		$data = $this->model->getTas('Pria');
		$this->load->view('tas_pria', array('data' => $data)); 
	}

	public function buka_tas_pria_murah() { $data = $this->model->getTasOrderbyKategori('tt_barang', 'harga_jual', 'asc', 'Pria'); $this->load->view('tas_pria', array('data' => $data)); }
	public function buka_tas_pria_mahal() { $data = $this->model->getTasOrderbyKategori('tt_barang', 'harga_jual', 'desc', 'Pria'); $this->load->view('tas_pria', array('data' => $data)); }

	public function buka_tas_anak() { 
		$data = $this->model->getTas('Anak');
		$this->load->view('tas_anak', array('data' => $data)); 
	}

	public function buka_tas_anak_murah() { $data = $this->model->getTasOrderbyKategori('tt_barang', 'harga_jual', 'asc', 'Anak'); $this->load->view('tas_anak', array('data' => $data)); }
	public function buka_tas_anak_mahal() { $data = $this->model->getTasOrderbyKategori('tt_barang', 'harga_jual', 'desc', 'Anak'); $this->load->view('tas_anak', array('data' => $data)); }

	public function buka_tas_make_up() { 
		$data = $this->model->getTas('MU');
		$this->load->view('tas_make_up', array('data' => $data));  
	}

	public function buka_tas_make_up_murah() { $data = $this->model->getTasOrderbyKategori('tt_barang', 'harga_jual', 'asc', 'MU'); $this->load->view('tas_make_up', array('data' => $data)); }
	public function buka_tas_make_up_mahal() { $data = $this->model->getTasOrderbyKategori('tt_barang', 'harga_jual', 'desc', 'MU'); $this->load->view('tas_make_up', array('data' => $data)); }

	public function buka_tas_promo() { 
		$data = $this->model->getTas('Prom');
		$this->load->view('tas_promo', array('data' => $data)); 
	}

	public function buka_tas_promo_murah() { $data = $this->model->getTasOrderbyKategori('tt_barang', 'harga_jual', 'asc', 'Prom'); $this->load->view('tas_promo', array('data' => $data)); }
	public function buka_tas_promo_mahal() { $data = $this->model->getTasOrderbyKategori('tt_barang', 'harga_jual', 'desc', 'Prom'); $this->load->view('tas_promo', array('data' => $data)); }
}