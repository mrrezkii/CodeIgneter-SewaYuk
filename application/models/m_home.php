<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_home extends CI_Model {
    
    public function getListBarang(){      
        $this->db->select('*');
        $this->db->from('barang');   
        $this->db->join('user','user.id_user=barang.id_user');
        $this->db->order_by('tanggal_masuk', 'DESC');
        $this->db->where('status_barang', '1');
        $this->db->limit(6);
        return $this->db->get()->result();
    }

    public function getPromosiBarang(){      
        $this->db->select('*');
        $this->db->from('barang');   
        $this->db->join('user','user.id_user=barang.id_user');
        $this->db->order_by('tanggal_masuk', 'ASC');
        $this->db->where('status_barang', '1');
        $this->db->where('status_promosi', '1');
        return $this->db->get()->result();
    }

    public function getDataBarang(){      
        $this->db->select('*');
        $this->db->from('barang');   
        $this->db->join('user','user.id_user=barang.id_user');
        $this->db->order_by('tanggal_masuk', 'DESC');
        $this->db->where('status_barang', '1');
        return $this->db->get()->result();
    }
    
}


?>