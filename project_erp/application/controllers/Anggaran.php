<?php

defined ('BASEPATH') or exit('No direct script access allowe');

Class Anggaran extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Anggaran_model');
    }
    public function index(){

        $data['judul'] = "Anggaran Management";
        $data['data'] = $this->Anggaran_model->get();
        $this->load->view('account/list_anggaran',$data);
    }

    public function hapus($id)
	{
        $this->Anggaran_model->delete($id);
        $this->session->set_flashdata('message', 'Data Berhasil Dihapus');
        redirect('anggaran');
	}
	public function anggaran_form()
	{
        $data['judul'] = "Anggaran Management";
		$this->load->view('form_anggaran',$data);
    }
    
    public function tambah(){
        $nama_barang = $this->input->post('nama_barang');
        $jumlah_barang = $this->input->post('jumlah_barang');
        $harga_barang = $this->input->post('harga_barang');
        $modal = $this->input->post('modal');
        $keuntungan = $this->input->post('keuntungan');
        $data = array(
            'nama_barang' => $nama_barang,
            'jumlah_barang' => $jumlah_barang,
            'harga_barang' => $harga_barang,
            'modal' => $modal,
            'keuntungan' => $keuntungan,
        );
        $this->Anggaran_model->insert($data);
        $this->session->set_flashdata('message', 'Data Berhasil Ditambah');
        redirect('anggaran');
    }

    public function form($id=""){
        if($id == ""){
            $data['url_aksi'] = site_url('anggaran/tambah');
            $data['id']='';
            $data['nama_barang']='';
            $data['jumlah_barang']='';
            $data['harga_barang']='';
            $data['modal']='';
            $data['keuntungan']='';
            $this->load->view('account/form_anggaran',$data);
        }else{
            $anggaran = $this->Anggaran_model->get_id($id);
            $data['url_aksi'] = site_url('anggaran/edit');
            $data['id'] = $anggaran->id;
            $data['nama_barang'] =$anggaran->nama_barang;
            $data['jumlah_barang']=$anggaran->jumlah_barang;
            $data['harga_barang']=$anggaran->harga_barang;
            $data['modal'] =$anggaran->modal;
            $data['keuntungan'] =$anggaran->keuntungan;
            $this->load->view('account/form_anggaran',$data);
        }
    }

    public function edit(){
        $id = $this->input->post('id');
        $nama_barang = $this->input->post('nama_barang');
        $jumlah_barang = $this->input->post('jumlah_barang');
        $harga_barang = $this->input->post('harga_barang');
        $jumlah_barang = $this->input->post('jumlah_barang');
        $modal = $this->input->post('modal');
        $keuntungan = $this->input->post('keuntungan');
        $data = array(
            'nama_barang' => $nama_barang,
            'jumlah_barang' => $jumlah_barang,
            'harga_barang' => $harga_barang,
            'jumlah_barang' => $jumlah_barang,
            'modal' => $modal,
            'keuntungan' => $keuntungan,
        );
        $this->Anggaran_model->update($data,$id);
        $this->session->set_flashdata('message', 'Data Berhasil Diupdate');
        redirect('anggaran');
    }
}
?>