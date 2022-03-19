<?php

defined ('BASEPATH') or exit('No direct script access allowe');

Class Produksi extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Produksi_model');
    }
    public function index(){

        $data['judul'] = "Penjadwalan Produksi";
        $data['data'] = $this->Produksi_model->get();
        $this->load->view('manufactur/list_produksi',$data);
    }

    public function hapus($id)
	{
        $this->Produksi_model->delete($id);
        $this->session->set_flashdata('message', 'Data Berhasil Dihapus');
        redirect('Produksi');
	}
	public function produksi_form()
	{
        $data['judul'] = "Penjadwalan Produksi";
		$this->load->view('manufactur/form_produksi',$data);
    }
    
    public function tambah(){
        $nama_item = $this->input->post('nama_item');
        $jumlah_produksi = $this->input->post('jumlah_produksi');
        $tanggal_mulai = $this->input->post('tanggal_mulai');
        $tanggal_selesai = $this->input->post('tanggal_selesai');
        $jumlah_produksi_gagal = $this->input->post('jumlah_produksi_gagal');
        $data = array(
            'nama_item' => $nama_item,
            'jumlah_produksi' => $jumlah_produksi,
            'tanggal_mulai' => $tanggal_mulai,
            'tanggal_selesai' => $tanggal_selesai,
            'jumlah_produksi_gagal' => $jumlah_produksi_gagal,
        );
        $this->Produksi_model->insert($data);
        $this->session->set_flashdata('message', 'Data Berhasil Ditambah');
        redirect('produksi');
    }

    public function form($id=""){
        if($id == ""){
            $data['url_aksi'] = site_url('produksi/tambah');
            $data['id']='';
            $data['nama_item']='';           
            $data['jumlah_produksi']='';
            $data['tanggal_mulai']='';
            $data['tanggal_selesai']='';
            $data['jumlah_produksi_gagal']='';
            $this->load->view('manufactur/form_produksi',$data);
        }else{
            $produksi = $this->Produksi_model->get_id($id);
            $data['url_aksi'] = site_url('produksi/edit');
            $data['id'] = $produksi->id;
            $data['nama_item'] =$produksi->nama_item;           
            $data['jumlah_produksi']=$produksi->jumlah_produksi;
            $data['tanggal_mulai'] =$produksi->tanggal_mulai;
            $data['tanggal_selesai'] =$produksi->tanggal_selesai;
            $data['jumlah_produksi_gagal'] =$produksi->jumlah_produksi_gagal;
            $this->load->view('manufactur/form_produksi',$data);
        }
    }

    public function edit(){
        $id = $this->input->post('id');
        $nama_item = $this->input->post('nama_item');
        $jumlah_produksi = $this->input->post('jumlah_produksi');
        $tanggal_mulai = $this->input->post('tanggal_mulai');
        $tanggal_selesai = $this->input->post('tanggal_selesai');
        $jumlah_produksi_gagal = $this->input->post('jumlah_produksi_gagal');
        $data = array(
            'nama_item' => $nama_item,
            'jumlah_produksi' => $jumlah_produksi,
            'tanggal_mulai' => $tanggal_mulai,
            'tanggal_selesai' => $tanggal_selesai,
            'jumlah_produksi_gagal' => $jumlah_produksi_gagal,
        );
        $this->Produksi_model->update($data,$id);
        $this->session->set_flashdata('message', 'Data Berhasil Diupdate');
        redirect('produksi');
    }
}
?>