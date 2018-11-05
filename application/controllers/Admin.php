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
        $this->load->view('template/v_dashboard',$data);
    }

    public function tabel_user()
	{
		$data['title'] = "Data Pengguna";
        $data['konten'] = "admin/v_tabel_user";
        $data['Data_User'] = $this->admin->getUser();
        $this->load->view('template/v_dashboard',$data);
    }
}
