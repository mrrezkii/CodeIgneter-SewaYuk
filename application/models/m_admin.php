<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

    public function getUser(){      
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('status', 'user');    
        return $this->db->get()->result();
    }

    public function getBarang(){      
        $this->db->select('*');
        $this->db->from('barang');   
        $this->db->join('jenis_barang','jenis_barang.id_jenis=barang.id_jenis');
        $this->db->join('user','user.id_user=barang.id_user');
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

    public function getUser_Verif(){      
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('verifikasi !=', false); 
        return $this->db->get()->result();
    }

    public function getUser_NonVerif(){      
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('verifikasi !=', true); 
        return $this->db->get()->result();
    }

    public function getBarang_Verif(){      
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->where('status_barang !=', false); 
        return $this->db->get()->result();
    }

    public function getBarang_NonVerif(){      
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->where('status_barang !=', true); 
        return $this->db->get()->result();
    }

    public function getBarang_Promosi(){      
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->where('status_promosi !=', false); 
        return $this->db->get()->result();
    }

    public function getUser_Verifikasi(){      
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('foto_identitas !=', NULL);    
        $this->db->where('NIK !=', NULL); 
        $this->db->where('verifikasi !=', true); 
        return $this->db->get()->result();
    }

    public function getBarang_Verifikasi(){      
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->join('user','user.id_user=barang.id_user');
        $this->db->join('jenis_barang','jenis_barang.id_jenis=barang.id_jenis');
        $this->db->where('status_barang', '0');   
        $this->db->order_by('tanggal_masuk', 'ASC'); 
        return $this->db->get()->result();
    }

    public function getTransaksi(){      
        $this->db->select('*');
        $this->db->from('transaksi'); 
        $this->db->join('barang','barang.id_barang=transaksi.id_barang');
        $this->db->join('jenis_barang','jenis_barang.id_jenis=barang.id_jenis');
        $this->db->join('user','user.id_user=barang.id_user AND transaksi.id_penyewa');
        $this->db->order_by('tanggal_sewa', 'DESC'); 
        return $this->db->get()->result();
    }

    
    public function getJenisTransaksi(){      
        $this->db->select('*');
        $this->db->from('transaksi'); 
        $this->db->join('barang','barang.id_barang=transaksi.id_barang', 'LEFT');
        $this->db->join('jenis_barang','jenis_barang.id_jenis=barang.id_jenis');
        return $this->db->get()->result();
    }

    public function verifikasi_user()
    {
        $data = array(
                'verifikasi' => 1
            );

        return $this->db->where('id_user', $this->input->post('id_user'))
                        ->update('user', $data);
    }

    public function data_user($a)
	{
        return $this->db
                    ->where('id_user', $a)
                    ->get('user')
                    ->row();
    }

    public function verifikasi_barang()
    {
        $data = array(
                'status_barang' => 1
            );

        return $this->db->where('id_barang', $this->input->post('id_barang'))
                        ->update('barang', $data);
    }

    public function data_barang($a)
	{
        return $this->db
                    ->where('id_barang', $a)
                    ->get('barang')
                    ->row();
    }


    
}


?>