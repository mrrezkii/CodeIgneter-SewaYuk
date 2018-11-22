<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // if ($this->session->userdata('login')!=TRUE) {
        //     redirect('user/login','refresh');
        // }

        // if ($this->session->userdata('status')!="Admin") {
        //     redirect('custom_error','refresh');
        // }
        $this->load->model('m_admin','admin');
    }

	public function index()
	{
		$data['title'] = "Dashboard Admin";
        $data['konten'] = "admin/v_home";
        $data['Jumlah_User'] = count($this->admin->getUser());
        $data['Jumlah_Barang'] = count($this->admin->getBarang());
        $this->load->view('template/v_dashboard',$data);
    }

    public function tabel_user()
	{
		$data['title'] = "Data Pengguna";
        $data['konten'] = "admin/v_tabel_user";
        $data['Data_User'] = $this->admin->getUser();
        $data['DataCowok'] = count($this->admin->getUser_laki());
        $data['DataCewek'] = count($this->admin->getUser_cewek());
        $data['DataVerif'] = count($this->admin->getUser_Verif());
        $data['DataNonVerif'] = count($this->admin->getUser_NonVerif());
        $this->load->view('template/v_dashboard',$data);
    }

    public function tabel_barang()
	{
		$data['title'] = "Data Barang";
        $data['konten'] = "admin/v_tabel_barang";
        $data['Data_Barang'] = $this->admin->getBarang();
        $data['DataVerif'] = count($this->admin->getBarang_Verif());
        $data['DataNonVerif'] = count($this->admin->getBarang_NonVerif());
        $data['DataPromosi'] = count($this->admin->getBarang_Promosi());
        $this->load->view('template/v_dashboard',$data);
    }

    public function konfirmasi_akun()
	{
		$data['title'] = "Verifikasi Akun";
        $data['konten'] = "admin/v_konfirmasi_akun";
        $data['Data_Verifikasi'] = $this->admin->getUser_Verifikasi();
        $this->load->view('template/v_dashboard',$data);
    }

    public function konfirmasi_barang()
	{
		$data['title'] = "Verifikasi Barang";
        $data['konten'] = "admin/v_konfirmasi_barang";
        $data['Data_Verifikasi'] = $this->admin->getBarang_Verifikasi();
        $this->load->view('template/v_dashboard',$data);
    }

    public function data_user($id){
		$data=$this->admin->data_user($id);
		echo json_encode($data);
    }
    
    public function verifikasi_user()
	{	
        if($this->input->post('edit')){
		$this->admin->verifikasi_user();
		$this->session->set_flashdata('pesan_sukses', 'Sukses Mengkonfirmasi Akun');
        redirect('admin/konfirmasi_akun');
        }
    }
    
    public function data_barang($id){
		$data=$this->admin->data_barang($id);
		echo json_encode($data);
    }
    
    public function verifikasi_barang()
	{	
        if($this->input->post('edit')){
		$this->admin->verifikasi_barang();
		$this->session->set_flashdata('pesan_sukses', 'Sukses Mengkonfirmasi Barang');
        redirect('admin/konfirmasi_barang');
        }
	}
}
