<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('M_login');
    }
 
	public function index()
	{
         $this->load->view('login/login');
    }
	
	public function daftar()
	{
		$this->load->view('login/daftar');
	}
	
	public function tambah(){
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $email = $this->input->post('email');
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $data = array(
			'nama' => $nama,
			'alamat' => $alamat,
            'email' => $email,
            'username' => $username,
            'password' => $password,
        );
        $this->M_login->insert($data);
        redirect('login');
    }
    
    public function login($id=""){
        if($id == ""){
            $data['url_aksi'] = site_url('user/tambah');
            $data['id']='';
            $data['nama']='';
            $data['alamat']='';
            $data['email']='';
            $data['username']='';
            $data['password']='';
            $this->load->view('user/login',$data);
        }else{
          
        }
    }

	public function logout()
	{
        $this->session->sess_destroy();
		redirect('login');
	}
}
?>
