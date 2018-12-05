<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('login')!=TRUE) {
            redirect('user/login','refresh');
        }

        
        $this->load->model('m_transaksi','transaksi');
    }

	public function index()
	{
        $data['title'] = "Data Transaksi Barang";
        $data['DataTransaksi'] = $this->transaksi->getBarangUser();
        $data['konten'] = "transaksi/v_transaksi_barang";
        $this->load->view('template/v_dashboard_transaksi',$data);
    }

    public function tabel_barang()
	{
        $data['DataTransaksi'] = $this->transaksi->getBarangSewa();
        $data['DataKategori'] = $this->transaksi->getKategori();
		$data['title'] = "Data Barang Sewa";
        $data['konten'] = "transaksi/v_barang";
        $this->load->view('template/v_dashboard_transaksi',$data);
    }

    public function transaksi_barang()
	{
        $data['title'] = "Data Transaksi Barang";
        $data['DataTransaksi'] = $this->transaksi->getBarangUser();
        $data['konten'] = "transaksi/v_transaksi_barang";
        $this->load->view('template/v_dashboard_transaksi',$data);
    }

    public function transaksi_sewa(){
        $data['DataTransaksi'] = $this->transaksi->getTransaksiSewa();
        $data['title'] = "Data Transaksi Sewa";
        $data['konten'] = "transaksi/v_transaksi_sewa";
        $this->load->view('template/v_dashboard_transaksi',$data);
    }

    public function sewa_barang()
    {
        if($this->transaksi->sewa_barang()==TRUE){
            $this ->session->set_flashdata('pesan_barang', 'Sukses Memesan Barang');
            redirect('home/barang','refresh');
            }
        
            else{
            $this->session->set_flashdata('pesan_gagal', 'Gagal Menyimpan Data Anda');
            $this->load->view('refresh');
            }
    }

    public function batal_sewa($id_transaksi)
    {
        $this->transaksi->hapus_transaksi($id_transaksi);
		$this->session->set_flashdata('pesan_sukses', 'Sukses Membatalkan Sewa');
		redirect('transaksi/transaksi_barang');
    }

    public function tambah_barang()
    {
        $this->form_validation->set_rules('nama_barang', 'nama_barang', 'trim|required');
		$this->form_validation->set_rules('deskripsi_barang', 'deskripsi_barang', 'trim|required');
		$this->form_validation->set_rules('harga_barang', 'harga_barang', 'trim|required');
        $this->form_validation->set_rules('id_jenis', 'id_jenis', 'trim|required');
        
        if ($this->form_validation->run()==TRUE) {
			$config['upload_path'] = './assets/user/foto/barang/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '2000';
			$config['max_width']  = '5000';
			$config['max_height']  = '5000';
			if ($_FILES['foto_barang']['name']!="") {
				$this->load->library('upload', $config);

				if (! $this->upload->do_upload('foto_barang')) {
                    $this->session->set_flashdata('pesan_error', $this->upload->display_errors());
                    redirect('transaksi/tabel_barang','refresh');
				}else {
					if ($this->transaksi->simpan_barang($this->upload->data('file_name'))) {
						$this->session->set_flashdata('pesan_sukses', 'Sukses Menambah Data barang ');
					}else{
						$this->session->set_flashdata('pesan_error', 'Gagal menambah');
					}
					redirect('transaksi/tabel_barang','refresh');
                }
                
               
            }
            else{
                $this->session->set_flashdata('pesan_error', $this->upload->display_errors());
                redirect('transaksi/tabel_barang','refresh');
            }
		}else{
			$this->session->set_flashdata('pesan_error', validation_errors());
			redirect('transaksi/tabel_barang','refresh');
		}
    }

}
