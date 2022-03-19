<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Controller extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Login');
    }

    public function proses()
	{
        $this->load->model('Login'); 

		$username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $where = array(
            'username' => $username,
            'password' => ($password)
        );

        $cek = $this->Login->cek_login("user",$where)->num_rows();

        if($cek > 0){
            $data_session =  array(
                'nama' => $username,
                'status' => "login"
            );

            $this->session->set_userdata($data_session);
           
            $this->load->view('welcome_message');
        }else{
            $this->session->set_flashdata('message', 'Maaf Username atau Password Anda Salah ...');
            redirect(base_url("index.php/login"));
        }
	}
}
?>