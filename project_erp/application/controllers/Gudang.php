<?php

defined ('BASEPATH') or exit('No direct script access allowe');

Class Gudang extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Gudang_model');
    }
    public function index(){

        $data['judul'] = "Data Gudang";
        $data['data'] = $this->Gudang_model->get();
        $this->load->view('purchase/list_gudang',$data);
    }

    public function hapus($id)
	{
        $this->Gudang_model->delete($id);
        $this->session->set_flashdata('message', 'Data Berhasil Dihapus');
        redirect('gudang');
	}
	public function gudang_form()
	{
        $data['judul'] = "Data Gudang";
		$this->load->view('form_gudang',$data);
    }
    
    public function tambah(){
        $nama_gudang = $this->input->post('nama_gudang');
        $kode_gudang = $this->input->post('kode_gudang');
        $alamat_gudang = $this->input->post('alamat_gudang');
        $jenis_gudang = $this->input->post('jenis_gudang');
        $jadwal_gudang = $this->input->post('jadwal_gudang');
        $data = array(
            'nama_gudang' => $nama_gudang,
            'kode_gudang' => $kode_gudang,
            'alamat_gudang' => $alamat_gudang,
            'jenis_gudang' => $jenis_gudang,
            'jadwal_gudang' => $jadwal_gudang,
        );
        $this->Gudang_model->insert($data);
        $this->session->set_flashdata('message', 'Data Berhasil Ditambah');
        redirect('gudang');
    }

    public function form($id=""){
        if($id == ""){
            $data['url_aksi'] = site_url('gudang/tambah');
            $data['id']='';
            $data['nama_gudang']='';
            $data['kode_gudang']='';
            $data['alamat_gudang']='';
            $data['jenis_gudang']='';
            $data['jadwal_gudang']='';
            $this->load->view('purchase/form_gudang',$data);
        }else{
            $gudang = $this->Gudang_model->get_id($id);
            $data['url_aksi'] = site_url('gudang/edit');
            $data['id'] = $gudang->id;
            $data['nama_gudang'] =$gudang->nama_gudang;
            $data['kode_gudang']=$gudang->kode_gudang;
            $data['alamat_gudang']=$gudang->alamat_gudang;
            $data['jenis_gudang'] =$gudang->jenis_gudang;
            $data['jadwal_gudang'] =$gudang->jadwal_gudang;
            $this->load->view('purchase/form_gudang',$data);
        }
    }

    public function edit(){
        $id = $this->input->post('id');
        $nama_gudang = $this->input->post('nama_gudang');
        $kode_gudang = $this->input->post('kode_gudang');
        $alamat_gudang = $this->input->post('alamat_gudang');
        $kode_gudang = $this->input->post('kode_gudang');
        $jenis_gudang = $this->input->post('jenis_gudang');
        $jadwal_gudang = $this->input->post('jadwal_gudang');
        $data = array(
            'nama_gudang' => $nama_gudang,
            'kode_gudang' => $kode_gudang,
            'alamat_gudang' => $alamat_gudang,
            'kode_gudang' => $kode_gudang,
            'jenis_gudang' => $jenis_gudang,
            'jadwal_gudang' => $jadwal_gudang,
        );
        $this->Gudang_model->update($data,$id);
        $this->session->set_flashdata('message', 'Data Berhasil Diupdate');
        redirect('gudang');
    }
}
?>