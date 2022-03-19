<?php

defined ('BASEPATH') or exit('No direct script access allowe');

Class Seri extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Seri_model');
    }
    public function index(){

        $data['judul'] = "Data Manajemen Nomor Seri dan Batch Number";
        $data['data'] = $this->Seri_model->get();
        $this->load->view('inventory/indexSeri',$data);
    }

    public function hapus($id)
	{
        $this->Seri_model->delete($id);
        $this->session->set_flashdata('message', 'Data Berhasil Dihapus');
        redirect('Seri');
	}
	public function seri_form()
	{
        $data['judul'] = "Data Manajemen Nomor Seri dan Batch Number";
		$this->load->view('inventory/formSeri',$data);
    }
    
    public function tambah(){
        $nama_produk = $this->input->post('nama_produk');
        $nomor_seri = $this->input->post('nomor_seri');
        $batch_number = $this->input->post('batch_number');
        $nomor_seri = $this->input->post('nomor_seri');
        $jumlah = $this->input->post('jumlah');
        $data = array(
            'nama_produk' => $nama_produk,
            'nomor_seri' => $nomor_seri,
            'batch_number' => $batch_number,
            'nomor_seri' => $nomor_seri,
            'jumlah' => $jumlah,
        );
        $this->Seri_model->insert($data);
        $this->session->set_flashdata('message', 'Data Berhasil Ditambah');
        redirect('seri');
    }

    public function form($id=""){
        if($id == ""){
            $data['url_aksi'] = site_url('seri/tambah');
            $data['id']='';
            $data['nama_produk']='';
            $data['nomor_seri']='';
            $data['batch_number']='';
            $data['jumlah']='';
            $this->load->view('inventory/formSeri',$data);
        }else{
            $seri = $this->Seri_model->get_id($id);
            $data['url_aksi'] = site_url('seri/edit');
            $data['id'] = $seri->id;
            $data['nama_produk'] =$seri->nama_produk;
            $data['nomor_seri']=$seri->nomor_seri;
            $data['batch_number']=$seri->batch_number;
            $data['jumlah'] =$seri->jumlah;
            $this->load->view('inventory/formSeri',$data);
        }
    }

    public function edit(){
        $id = $this->input->post('id');
        $nama_produk = $this->input->post('nama_produk');
        $nomor_seri = $this->input->post('nomor_seri');
        $batch_number = $this->input->post('batch_number');
        $nomor_seri = $this->input->post('nomor_seri');
        $jumlah = $this->input->post('jumlah');
        $data = array(
            'nama_produk' => $nama_produk,
            'nomor_seri' => $nomor_seri,
            'batch_number' => $batch_number,
            'nomor_seri' => $nomor_seri,
            'jumlah' => $jumlah,
        );
        $this->Seri_model->update($data,$id);
        $this->session->set_flashdata('message', 'Data Berhasil Diupdate');
        redirect('seri');
    }
}
?>