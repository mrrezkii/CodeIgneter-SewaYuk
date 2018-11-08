<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_user extends CI_Model {


    public function masuk(){
        $nama_user=$this->input->post('nama_user');
        $email=$this->input->post('email');
        $telepon=$this->input->post('telepon');
        $tanggal_lahir=$this->input->post('tanggal_lahir');
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $datasimpan=array(
            'nama_user'=>$nama_user,
            'email'=>$email,
            'telepon'=>$telepon,
            'tanggal_lahir'=>$tanggal_lahir,
            'username'=>$username,
            'password'=>$password,
            'status'=> "User"
        );
        $this->db->insert('user',$datasimpan);
        if($this->db->affected_rows()>0){
            return TRUE;
        }else{
            return FALSE;
        }
    }   

    public function get_login(){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', $this->input->post('password'));
        return $this->db->get();
    }  

    public function detail_user($a)
    {
        return $this->db
                    ->where('id_user', $a)
                    ->get('user')
                    ->row();
    }
}


?>