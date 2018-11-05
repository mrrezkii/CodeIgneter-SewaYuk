<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_admin extends CI_Model {

    public function getUser(){      
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('status', 'user');    
        return $this->db->get()->result();
    }
  
    
}


?>