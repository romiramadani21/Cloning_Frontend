<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('M_login');
    }
 
    public function index(){

        $data['judul'] = "Data user";
        $data['user'] = $this->M_login->get();
        $this->load->view('pengguna/pengguna',$data);
    }

    public function hapus($id)
	{
        $this->M_login->delete($id);
        $this->session->set_flashdata('message', 'Data Berhasil Dihapus');
        redirect('pengguna');
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
        $this->session->set_flashdata('message', 'Data Berhasil Ditambah');
        redirect('Pengguna');
    }

    public function edit(){
        $id = $this->input->post('id');
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
        $this->M_login->update($data,$id);
        $this->session->set_flashdata('message', 'Data Berhasil Diupdate');
        redirect('Pengguna');
    }

    public function form($id=""){
        if($id == ""){
            $data['url_aksi'] = site_url('pengguna/tambah');
            $data['id']='';
            $data['nama']='';
            $data['alamat']='';
            $data['email']='';
            $data['username']='';
            $data['password']='';
            $this->load->view('pengguna/form_pengguna',$data);
        }else{
            $user = $this->M_login->get_id($id);
            $data['url_aksi'] = site_url('pengguna/edit');
            $data['id'] = $user->id;
            $data['nama'] =$user->nama;
            $data['alamat']=$user->alamat;
            $data['email']=$user->email;
            $data['username']=$user->username;
            $data['password'] =$user->password;
            $this->load->view('pengguna/form_pengguna',$data);
        }
    }
}
?>