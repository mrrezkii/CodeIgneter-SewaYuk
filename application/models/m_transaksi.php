<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_transaksi extends CI_Model {
    
    public function getBarangUser(){      
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('barang','barang.id_barang=transaksi.id_barang');
        $this->db->join('user','user.id_user=barang.id_user');
        $this->db->join('jenis_barang','jenis_barang.id_jenis=barang.id_jenis');
        $this->db->where('id_penyewa', $this->session->userdata('id_user'));   
        $this->db->order_by('tanggal_sewa', 'DESC'); 
        return $this->db->get()->result();
    }

    public function getBarangSewa(){      
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->join('user','user.id_user=barang.id_user');
        $this->db->join('jenis_barang','jenis_barang.id_jenis=barang.id_jenis');
        $this->db->where('barang.id_user', $this->session->userdata('id_user'));   
        $this->db->order_by('id_barang', 'DESC'); 
        return $this->db->get()->result();
    }

    public function getTransaksiSewa(){      
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('barang','barang.id_barang=transaksi.id_barang');
        $this->db->join('user','user.id_user=transaksi.id_penyewa');
        $this->db->join('jenis_barang','jenis_barang.id_jenis=barang.id_jenis');
        $this->db->where('barang.id_user', $this->session->userdata('id_user'));   
        $this->db->order_by('transaksi.id_barang', 'DESC'); 
        return $this->db->get()->result();
    }

   
    
}


?>