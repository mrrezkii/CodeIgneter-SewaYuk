<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // if ($this->session->userdata('login')!=TRUE) {
        //     redirect('user/login','refresh');
        // }

        // if ($this->session->userdata('status')!="Admin") {
        //     redirect('custom_error','refresh');
        // }
        $this->load->model('m_transaksi','transaksi');
    }

	public function index()
	{
		$data['title'] = "Dashboard Transaksi";
        $data['konten'] = "transaksi/v_home";
        $this->load->view('template/v_dashboard_transaksi',$data);
    }

    public function tabel_barang()
	{
        $data['DataTransaksi'] = $this->transaksi->getBarangSewa();
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
}
