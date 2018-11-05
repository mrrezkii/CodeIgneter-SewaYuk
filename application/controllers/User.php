<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_user','user');
        if ($this->session->userdata('login')==TRUE) {
                redirect('home','refresh');
        }
    
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

}
