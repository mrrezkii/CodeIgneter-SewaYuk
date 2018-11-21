<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('m_home','home');
    }

	public function index()
	{	
		$data['ListBarang'] = $this->home->getListBarang();
		$data['ListPromosi'] = $this->home->getPromosiBarang();
		$data['title']="SewaYuk | Home";
		$this->load->view('v_home',$data);
	}

	public function barang()
	{
		$data['ListBarang'] = $this->home->getDataBarang();
		$data['title']="SewaYuk | Home";
		$this->load->view('v_barang',$data);
	}
	
	public function transaksi()
	{
		$data['ListBarang'] = $this->home->getStatusBarang();
		$data['title']="SewaYuk | Home";
		$this->load->view('v_transaksi',$data);
	}

}
