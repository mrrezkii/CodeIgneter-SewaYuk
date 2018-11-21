<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_transaksi extends CI_Model {
    
    public function getBarangUser(){      
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->join('jenis_barang','jenis_barang.id_jenis=barang.id_jenis');
        $this->db->where('id_user', $this->session->userdata('id_user'));   
        $this->db->order_by('tanggal_masuk', 'ASC'); 
        return $this->db->get()->result();
    }
    
}


?>