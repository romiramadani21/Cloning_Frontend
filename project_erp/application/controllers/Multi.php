<?php

defined ('BASEPATH') or exit('No direct script access allowe');

Class Multi extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Multi_model');
    }
    public function index(){

        $data['judul'] = "Data Manajemen Multi Gudang dan Lokasi";
        $data['multis'] = $this->Multi_model->get();
        $this->load->view('inventory/indexMulti',$data);
    }

    public function hapus($id_gudang)
	{
        $this->Multi_model->delete($id_gudang);
        $this->session->set_flashdata('message', 'Data Berhasil Dihapus');
        redirect('multi');
	}
	public function multi_form()
	{
        $data['judul'] = "Data multi";
		$this->load->view('formMulti',$data);
    }
    
    public function tambah(){
        $nama_gudang = $this->input->post('nama_gudang');
        $deskripsi = $this->input->post('deskripsi');
        $lokasi = $this->input->post('lokasi');
        $status = $this->input->post('status');
        $data = array(
            'nama_gudang' => $nama_gudang,
            'deskripsi' => $deskripsi,
            'lokasi' => $lokasi,
            'status' => $status,
        );
        $this->Multi_model->insert($data);
        $this->session->set_flashdata('message', 'Data Berhasil Ditambah');
        redirect('multi');
    }

    public function form($id_gudang=""){
        if($id_gudang == ""){
            $data['url_aksi'] = site_url('multi/tambah');
            $data['id_gudang']='';
            $data['nama_gudang']='';
            $data['deskripsi']='';
            $data['lokasi']='';
            $data['status']='';
            $this->load->view('inventory/formMulti',$data);
        }else{
            $multi = $this->Multi_model->get_id($id_gudang);
            $data['url_aksi'] = site_url('multi/edit');
            $data['id_gudang'] = $multi->id_gudang;
            $data['nama_gudang'] =$multi->nama_gudang;
            $data['deskripsi']=$multi->deskripsi;
            $data['lokasi']=$multi->lokasi;
            $data['status'] =$multi->status;
            $this->load->view('inventory/formMulti',$data);
        }
    }

    public function edit(){
        $id_gudang = $this->input->post('id_gudang');
        $nama_gudang = $this->input->post('nama_gudang');
        $deskripsi = $this->input->post('deskripsi');
        $lokasi = $this->input->post('lokasi');
        $deskripsi = $this->input->post('deskripsi');
        $status = $this->input->post('status');
        $data = array(
            'nama_gudang' => $nama_gudang,
            'deskripsi' => $deskripsi,
            'lokasi' => $lokasi,
            'deskripsi' => $deskripsi,
            'status' => $status,
        );
        $this->Multi_model->update($data,$id_gudang);
        $this->session->set_flashdata('message', 'Data Berhasil Diupdate');
        redirect('multi');
    }
}
?>