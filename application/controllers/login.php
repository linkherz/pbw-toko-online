<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

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
			//untuk bikin dari view manggil model 'My_Model.php'
			$this->load->model('model');
	}

	public function index() { $data = $this->model->getData('tt_barang');
		$this->load->view('home', array('data' => $data));  }

	public function login() //untuk login
	{
		$username = $this->input->post('username');
		$password = $this->input->post('pass');
		$isLogin = $this->model->login_authen($username, $password);
		if($isLogin) $isAdm = $this->model->login_author($username, $password);
		$cek = $this->model->cek($username,$password);
		if($cek ->num_rows() ==1) {	
			if ($isLogin == true && $isAdm == '1') {
				foreach ($cek -> result() as $data) {
					$sess_data['username'] = $data->username;
					$this->session->set_userdata($sess_data);
				}
				$updateStatus=array("status"=>"login");
				$this->model->update_data_login($username, $password, $updateStatus);
				$this->load->view('adm/ganti-pwd');
			}
			elseif ($isLogin == true && $isAdm == '-1') {
				$updateStatus=array("status"=>"login");
				$this->load->view('unactive');
			}
			elseif($isLogin == true) {
				foreach ($cek -> result() as $data) {
					$sess_data['username'] = $data->username;
					$this->session->set_userdata($sess_data);
				}
				$updateStatus=array("status"=>"login");
				$this->model->update_data_login($username, $password, $updateStatus);
				$this->index();
			}
		}
		else {
			$this->session->set_flashdata('pesan', 'user / pass ilegal !');
			$this->load->view('signin');
			echo "<script>alert('Username atau Password Anda salah. Silahkan masukkan username dan password yang benar. Bila Anda belum mendaftar, silahkan klik tombol Registrasi pada pojok kanan atas :)')</script>";
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		//redirect('home');
		//$updateStatus=array("status"=>"logout");
		//$this->model->login_state($username, $password, $updateStatus);
		$this->signin();
	}

	public function signin() { $this->load->view('signin'); }
	public function signup() { $this->load->view('signup'); }
}