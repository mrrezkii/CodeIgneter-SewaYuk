<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_admin extends CI_Model {

    public function getUser(){      
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('status', 'user');    
        return $this->db->get()->result();
    }
    
    public function getUser_laki(){      
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('jenis_kelamin', 'Laki-Laki');    
        return $this->db->get()->result();
    }

    public function getUser_Cewek(){      
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('jenis_kelamin', 'Perempuan');    
        return $this->db->get()->result();
    }


    
}


?>