<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TasAdm extends CI_Controller {

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

	public function index() { $this->load->view('adm/home'); }

	public function delete_tas(){
		$delete = $this->input->post('barang');
		$this->model->delete_item('kode_barang', $delete, 'tt_barang');
		$this->index();
	}

	public function insert_tas()
	{ 	
		$kategori = $this->input->post('kategori');
		if($kategori == "Wan") $kode='W-';
		elseif($kategori == "Anak") $kode='A-';
		elseif($kategori == "MU") $kode='MU-';
		elseif($kategori == "Pria") $kode='PRI-';
		elseif($kategori == "Prom") $kode='PRO-';
		else $kode='?-';

		$totalTas = $this->model->getTotalTas($kategori);
		$totalTas++;
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('upload');
		$is_submit = $this->input->post('is_submit');
		if(isset($is_submit) && $is_submit == 1){
			$fileUpload = array();
			$isUpload = FALSE;
			$config = array(
				 'upload_path' => './img/',
				 'allowed_types' => 'jpg|jpeg|png',
				 'max_size' => 512
			);
		} else{
			$this->index(); echo "thp 1";
		}

		$this->upload->initialize($config);
		if($this->upload->do_upload('userfile')){
			$fileUpload = $this->upload->data();
			$isUpload = TRUE;
		}

		if($isUpload){
			$arrI = array(
				'kategori' => $kategori,
				'kode_barang' => $kode.$totalTas,
				'nama_barang' => $this->input->post('nama_barang'),
				'harga_modal' => $this->input->post('harga_modal'),
				'harga_jual' => $this->input->post('harga_jual'),
				'bahan' => $this->input->post('bahan'),
				'berat' => $this->input->post('berat'),
				'panjang' => $this->input->post('panjang'),
				'lebar' => $this->input->post('lebar'),
				'tali_panjang' => $this->input->post('tali_panjang'),
				'bag_charm' => $this->input->post('bag_charm'),
				'file_gambar' => $fileUpload['file_name']
			);
			$qryI = $this->model->insertBarang('tt_barang',$arrI);
			if ($qryI >= 1) { $this->index(); }
		}
		else { $this->index(); echo "Format file atau ukuran file salah";}
	}

	public function adm_tas_promo() { 
		$data = $this->model->getTas('Prom');
		$this->load->view('adm/data-tas-promo', array('data' => $data)); 
	}
	public function adm_tas_wanita() { 
		$data = $this->model->getTas('Wan');
		$this->load->view('adm/data-tas-wanita', array('data' => $data)); 
	}
	public function adm_tas_pria() { 
		$data = $this->model->getTas('Pria');
		$this->load->view('adm/data-tas-pria', array('data' => $data)); 
	}
	public function adm_tas_anak() { 
		$data = $this->model->getTas('Anak');
		$this->load->view('adm/data-tas-anak', array('data' => $data)); 
	}
	public function adm_tas_make_up() { 
		$data = $this->model->getTas('MU');
		$this->load->view('adm/data-tas-make-up', array('data' => $data));  
	}
}