<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_user extends CI_Model {

    public function get_login(){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', $this->input->post('password'));
        return $this->db->get();
    }  
}


?>