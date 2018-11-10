<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_user','user');
        // if ($this->session->userdata('login')==TRUE) {
        //         redirect('home','refresh');
        // }
    
    }

	public function login()
	{
		$data['title']="Login Akun";
		$this->load->view('v_login',$data);
    }

    public function proses_login(){
        if($this->input->post('submit')){
            $this->form_validation->set_rules('username','username', 'trim|required');
            $this->form_validation->set_rules('password','password', 'trim|required');
            if($this->form_validation->run() ==TRUE){
               if($this->user->get_login()->num_rows()>0){
                   $data=$this->user->get_login()->row();
                    $array=array(
                        'login'=> TRUE,
                        'nama_user'=>$data->nama_user,
                        'tanggal_lahir'=>$data->tanggal_lahir,
                        'username'=>$data->username,
                        'password'=>$data->password,
                        'alamat'=>$data->alamat,
                        'jenis_kelamin'=>$data->jenis_kelamin,
                        'email'=>$data->email,
                        'NIK'=>$data->NIK,
                        'telepon'=>$data->telepon,
                        'foto_profil'=>$data->foto_profil,
                        'foto_identitas'=>$data->foto_identitas,
                        'status'=>$data->status,
                        'id_user'=>$data->id_user,
                    );
                    $this->session->set_userdata($array);
                    $this->session->set_flashdata('pesan', 'Sukses Masuk Ke Akun');
                    redirect('home','refresh');
                }else{
                    $this->session->set_flashdata('pesan_gagal','Username Atau Password Yang Anda Masukkan Salah');
                    redirect('user/login','refresh');
                }
            }else{
                $this->session->set_flashdata('pesan_gagal',validation_errors());
                 redirect('user/login','refresh');
            }
        }
    }

    public function register()
	{
		$data['title']="Resgistrasi Akun";
		$this->load->view('v_register',$data);
    }

    public function register_akun(){

		if($this->input->post('submit')){

			$this->form_validation->set_rules('nama_user', 'nama_user', 'trim|required|min_length[3]');
			$this->form_validation->set_rules('email', 'email', 'trim|required');
            $this->form_validation->set_rules('telepon', 'telepon', 'trim|required');
            $this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'trim|required');
			$this->form_validation->set_rules('username', 'username', 'trim|required');		
            $this->form_validation->set_rules('password', 'password', 'trim|required');
            

			if ($this->form_validation->run() == TRUE) {
				
				if($this->user->masuk()==TRUE){
				$this ->session->set_flashdata('pesan_sukses', 'Sukses Menyimpan Data Anda');
			
				redirect('user/login','refresh');
				}
			
				else{
				$this->session->set_flashdata('pesan_gagal', 'Gagal Menyimpan Data Anda');
				$this->load->view('user/register');
				}

			} 
			
			else {
					$this->session->set_flashdata('pesan_gagal', validation_errors());
					$this->load->view('user/register','refresh');
				 }

		}
		
    }

    public function profil($id)
	{
        if ($this->session->userdata('login')==FALSE) {
               redirect('user/login','refresh');
        }
		$data['title']="Data Akun Pengguna";
		$data['data_user']= $this->user->detail_user($id);
		$this->load->view('v_profil',$data);
	}
	
	public function edit_profil($id)
	{
        $data['title']="Edit Data Akun Pengguna";
        $data['data_user']= $this->user->detail_user($id);
		$this->load->view('v_edit_profil',$data);
    }

    
    public function logout()
    {
       
        $this->session->sess_destroy();
        $this->session->set_flashdata('pesan', 'Sukses Keluar Akun');
        redirect('home','refresh');
    }
}
