<?php

defined ('BASEPATH') or exit('No direct script access allowe');

Class User extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('User_model');
    }
    public function index(){

        $data['judul'] = "Data user";
        $data['users'] = $this->User_model->get();
        $this->load->view('user/list',$data);
    }

    public function hapus($id)
	{
        $this->User_model->delete($id);
        $this->session->set_flashdata('message', 'Data Berhasil Dihapus');
        redirect('user');
	}
	public function user_form()
	{
        $data['judul'] = "Data user";
		$this->load->view('user/form',$data);
    }
    
    public function tambah(){
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $prodi = $this->input->post('prodi');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $data = array(
            'nama' => $nama,
            'email' => $email,
            'prodi' => $prodi,
            'email' => $email,
            'password' => $password,
        );
        $this->User_model->insert($data);
        $this->session->set_flashdata('message', 'Data Berhasil Ditambah');
        redirect('user');
    }

    public function form($id=""){
        if($id == ""){
            $data['url_aksi'] = site_url('user/tambah');
            $data['id']='';
            $data['nama']='';
            $data['email']='';
            $data['prodi']='';
            $data['password']='';
            $this->load->view('user/form',$data);
        }else{
            $user = $this->User_model->get_id($id);
            $data['url_aksi'] = site_url('user/edit');
            $data['id'] = $user->id;
            $data['nama'] =$user->nama;
            $data['email']=$user->email;
            $data['prodi']=$user->prodi;
            $data['password'] =$user->password;
            $this->load->view('user/form',$data);
        }
    }

    public function edit(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $prodi = $this->input->post('prodi');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $data = array(
            'nama' => $nama,
            'email' => $email,
            'prodi' => $prodi,
            'email' => $email,
            'password' => $password,
        );
        $this->User_model->update($data,$id);
        $this->session->set_flashdata('message', 'Data Berhasil Diupdate');
        redirect('user');
    }
}
?>