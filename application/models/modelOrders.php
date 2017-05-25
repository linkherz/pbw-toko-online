<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ModelOrders extends CI_Model {
	
	public function process()
	{
		//create new invoice
		$invoice = array(
			'tanggal'   => date('Y-m-d H:i:s'),
			'deadline'	=> date('Y-m-d H:i:s', mktime( date('H'),date('i'),date('s'),date('m'),date('d') + 1,date('Y'))),
            'username'  => $this->get_logged_user_id(),
			'status'	=> 'unpaid'
		);
		$this->db->insert('tt_invoice', $invoice);

		$kode_invoice = $this->db->insert_id();
		// put ordered items in orders table
		foreach($this->cart->contents() as $item){
			$data = array(
				'kode_invoice'		=> $kode_invoice,
				//'kode_barang'		=> $item['name'],
				'nama_barang'		=> $item['name'],
				//'qty'				=> $item['qty'],
				'harga'				=> $item['price']
			);
			$this->db->insert('tt_pesanan', $data);
		}
		return TRUE;
	}
	
    public function all()
    {
        //Get all invoices from Invoices table
        $hasil = $this->db->get('tt_invoice');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return false;
        }
    }

    public function get_invoice_by_id($invoice_id)
    {
        $hasil = $this->db->where('kode_invoice',$invoice_id)->limit(1)->get('tt_invoice');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return false;
        }
    }

    public function get_orders_by_invoice($invoice_id)
    {
        $hasil = $this->db->where('kode_invoice',$invoice_id)->get('tt_pesanan');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return false;
        }
    }

    public function get_logged_user_id()
    {
        $hasil = $this->db
                        ->select('username')
                        ->where('username',$this->session->userdata('username'))
                        ->limit(1)
                        ->get('tt_user');
        if($hasil->num_rows() > 0){
            return $hasil->row()->username;
        } else {
            return 0;
        }
    }

    public function get_log_transaksi($user)
    {
        $hasil = $this->db->select('i.*, SUM(1 * o.harga) AS total')
                          ->from('tt_invoice i, tt_user u, tt_pesanan o')
                          ->where('u.username',$user)
                          ->where('u.username = i.username')
                          ->where('o.kode_invoice = i.kode_invoice')
                          ->group_by('o.kode_invoice')
                          ->get();
        if($hasil->num_rows() > 0){
            return $hasil->result();        
        } else {
            return false; //if there are no matching records
        }
    }

    public function konfirm_invoice($kode_invoice, $amount)
    {
        $ret = true;
        //check the invoice
        $invoice = $this->db->where('kode_invoice',$kode_invoice)->limit(1)->get('tt_invoice');
        if($invoice->num_rows() == 0){
            $ret = $ret && false;
        } else {
            //check the amount
            $total = $this->db->select('SUM(1 * harga) as total')
                          ->where('kode_invoice',$kode_invoice)
                          ->get('tt_pesanan');
            if($total->row()->total > $amount){
                $ret = $ret && false;
            } else {
                //mark the invoice to PAID
                $this->db->where('kode_invoice', $kode_invoice)->update('tt_invoice',array('status'=>'confirmed'));
            }
        }  
        return $ret; 
    }
}