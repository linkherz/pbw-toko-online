<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Model extends CI_Model {

		public function getData($tableName)
		{
			$query = $this->db->get($tableName);
			return $query->result_array();
		}

		public function getTas($kategori)
		{
			$this->db->select();
			$this->db->where('kategori', $kategori);
			$this->db->from('tt_barang');
			$query = $this->db->get();
			return $query->result_array();
		}

		public function getTasOrderby($tableName, $colomnName, $order)
		{
			$this->db->select();
			$this->db->from($tableName);
			$this->db->order_by($colomnName, $order);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function getTasOrderbyKategori($tableName, $colomnName, $order, $kategori)
		{
			$this->db->select();
			$this->db->where('kategori', $kategori);
			$this->db->from($tableName);
			$this->db->order_by($colomnName, $order);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function getTasKD($kode_barang)
		{
			$this->db->select();
			$this->db->where('kode_barang', $kode_barang);
			$this->db->from('tt_barang');
			$this->db->limit(1);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function getTotalTas($kategori)
		{
			$this->db->select();
			$this->db->where('kategori', $kategori);
			$this->db->from('tt_barang');
			$query = $this->db->get();
			return $query->num_rows();
		}

		public function getTotalData($tableName)
		{
			$this->db->select();
			$this->db->from($tableName);
			$query = $this->db->get();
			return $query->num_rows();
		}

		public function getUser()
		{
			$this->db->select();
			$this->db->from('tt_user');
			$query = $this->db->get();
			return $query->result_array();
		}

		public function createRegist($data)
		{
			$dataC = $this->db->insert('tt_user',$data);
			return $dataC;
		}

		function cek($username , $password){
			$this->db->where('username',$username);
			$this->db->where('password', $password);
			return $this->db->get('tt_user');
		}

		public function login_authen($username, $password)
		{
			$this->db->select('*');
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$this->db->limit(1);	
			$this->db->from('tt_user');
			//$this->db->query('SELECT * FROM user WHERE username = '.$username.' && password = '.$password);
			$query = $this->db->get();
			if ($query->num_rows() == 1) return true;
			else return false;
		}

		public function login_author($username, $password)
		{
			$this->db->select('*');
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$this->db->from('tt_user');
			$query = $this->db->get();
			//if ($query->privileges == 1) return true;
			//else return false;
			$data = $query -> result_array();
			return $data[0]['privileges'];
		}

		public function update_data_login($username, $password, $data)
		{
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$this->db->update('tt_user', $data);
		}

		public function update_inactive_user($username, $data)
		{
			$this->db->where('username', $username);
			$this->db->update('tt_user', $data);
		}

		public function delete_item($id, $item, $tableName)
		{
			$this->db->where_in($id, $item);
			$this->db->delete($tableName);
		}

		public function insertBarang($tableName, $data)
		{
			$dataI = $this->db->insert($tableName,$data);
			return $dataI; //notif apakah proses insert berhasil (gagal : 0, berhasil >= 1)
		}
	}
?>