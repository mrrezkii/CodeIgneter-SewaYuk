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

    public function getKategori(){      
        $this->db->select('*');
        $this->db->from('jenis_barang');
        $this->db->order_by('nama_jenis', 'DESC'); 
        return $this->db->get()->result();
    }

    public function hapus_transaksi($id_transaksi){      
        $this->db->where('id_transaksi', $id_transaksi);
        $this->db->delete('transaksi');
    }

    public function sewa_barang(){
        $this->load->helper('date'); // load Helper for Date 

        date_default_timezone_set("UTC");
        echo $date=gmdate("F j, Y").'<br>'; // ie. May 23, 2018

        if (function_exists('date_default_timezone_set'))
        {
        date_default_timezone_set('Asia/Jakarta'); // Specify your time zone according to your city
        }

        date_default_timezone_set('Asia/Jakarta'); // Defined City For Timezone
        $currentDate =time();
        $datestring = '%Y-%m-%d - %h:%i %a';
        $time = time();
        $better_date= mdate($datestring, $time).'<br>'; //  i.e : 2018-05-23 - 09:52 am | For AM | PM result
        $c_date=date("Y-m-d H:i:s").'<br>'; // 2018-05-23 09:52:36 | For Seconds Result

        $id_barang=$this->input->post('id_barang');
        $datasimpan=array(
            'id_barang'=>$id_barang,
            'id_penyewa'=>$this->session->userdata('id_user'),
            'tanggal_sewa'=>$c_date,
            'waktu_kembali'=>$c_date,
            'status_transaksi'=>'Pending',
        );
        $this->db->insert('transaksi',$datasimpan);
        if($this->db->affected_rows()>0){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function simpan_barang($foto_barang)
    {
        $this->load->helper('date'); // load Helper for Date 

            date_default_timezone_set("UTC");
            echo $date=gmdate("F j, Y").'<br>'; // ie. May 23, 2018

            if (function_exists('date_default_timezone_set'))
            {
            date_default_timezone_set('Asia/Kolkata'); // Specify your time zone according to your city
            }

            date_default_timezone_set('Asia/Jakarta'); // Defined City For Timezone
            $currentDate =time();
            $datestring = '%Y-%m-%d - %h:%i %a';
            $time = time();
            $better_date= mdate($datestring, $time).'<br>'; //  i.e : 2018-05-23 - 09:52 am | For AM | PM result
            $c_date=date("Y-m-d H:i:s").'<br>'; // 2018-05-23 09:52:36 | For Seconds Result
     
            $object = array(
                'nama_barang' => $this->input->post('nama_barang'),
                'id_jenis' => $this->input->post('id_jenis'),
                'deskripsi_barang' => $this->input->post('deskripsi_barang'),
                'harga_barang' => $this->input->post('harga_barang'),
                'tanggal_masuk' =>  $c_date,
                'id_user' => $this->session->userdata('id_user'),
                'foto_barang' => $foto_barang
            );
        
        return $this->db->insert('barang', $object);
    }

   
    
}


?>