<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_user extends CI_Model {


    public function masuk(){
        $nama_user=$this->input->post('nama_user');
        $email=$this->input->post('email');
        $telepon=$this->input->post('telepon');
        $jenis_kelamin=$this->input->post('jenis_kelamin');
        $provinsi=$this->input->post('provinsi');
        $kota=$this->input->post('kota');
        $tanggal_lahir=$this->input->post('tanggal_lahir');
        $password=$this->input->post('password');
        $datasimpan=array(
            'nama_user'=>$nama_user,
            'email'=>$email,
            'telepon'=>$telepon,
            'jenis_kelamin'=>$jenis_kelamin,
            'provinsi'=>$provinsi,
            'kota'=>$kota,
            'tanggal_lahir'=>$tanggal_lahir,
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
        $this->db->where('email', $this->input->post('email'));
        $this->db->where('password', $this->input->post('password'));
        return $this->db->get();
    }  

    public function detail_user($a)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id_user', $a);
        return $this->db->get()->result();
    }

    public function edit_profil()
    {
        $data = array(
            'id_user' => $this->input->post('id_user'),
            'nama_user' => $this->input->post('nama_user'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'telepon' => $this->input->post('telepon'),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'NIK' => $this->input->post('NIK'),
            'password' => $this->input->post('password')
        );

        return $this->db->where('id_user', $this->input->post('id_user'))
            ->update('user', $data);
    }

    public function edit_profil_dengan_identitas($foto_identitas)
    {
        $data = array(
                'id_user' => $this->input->post('id_user'),
                'nama_user' => $this->input->post('nama_user'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'telepon' => $this->input->post('telepon'),
                'email' => $this->input->post('email'),
                'alamat' => $this->input->post('alamat'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'NIK' => $this->input->post('NIK'),
                'password' => $this->input->post('password'),
                'foto_identitas' => $foto_identitas
        );

        return $this->db->where('id_user', $this->input->post('id_user'))
        ->update('user', $data);
    }

    public function get_provinsi(){
        $this->db->select('*');
        $this->db->from('provinsi');
        return $this->db->get()->result();
    }

    public function get_kota(){
        $this->db->select('*');
        $this->db->from('kabupaten');
        return $this->db->get()->result();
    }

}


?>