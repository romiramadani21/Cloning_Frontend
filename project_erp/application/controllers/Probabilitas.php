<?php

defined ('BASEPATH') or exit('No direct script access allowe');

Class Probabilitas extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Probabilitas_model');
    }
    public function index(){

        $data['judul'] = "Probabilitas";
        $data['data'] = $this->Probabilitas_model->get();
        $this->load->view('account/list_probabilitas',$data);
    }

    public function hapus($id)
	{
        $this->Probabilitas_model->delete($id);
        $this->session->set_flashdata('message', 'Data Berhasil Dihapus');
        redirect('Probabilitas');
	}
	public function probabilitas_form()
	{
        $data['judul'] = "Probabilitas";
		$this->load->view('account/form_probabilitas',$data);
    }
    
    public function tambah(){
        $nama_barang = $this->input->post('nama_barang');
        $probabilitas_didaerah = $this->input->post('probabilitas_didaerah');
        $probabilitas_dalam_negeri = $this->input->post('probabilitas_dalam_negeri');
        $probabilitas_diluar_negeri = $this->input->post('probabilitas_diluar_negeri');
        $data = array(
            'nama_barang' => $nama_barang,
            'probabilitas_didaerah' => $probabilitas_didaerah,
            'probabilitas_dalam_negeri' => $probabilitas_dalam_negeri,
            'probabilitas_diluar_negeri' => $probabilitas_diluar_negeri,
        );
        $this->Probabilitas_model->insert($data);
        $this->session->set_flashdata('message', 'Data Berhasil Ditambah');
        redirect('probabilitas');
    }

    public function form($id=""){
        if($id == ""){
            $data['url_aksi'] = site_url('probabilitas/tambah');
            $data['id']='';
            $data['nama_barang']='';           
            $data['probabilitas_didaerah']='';
            $data['probabilitas_dalam_negeri']='';
            $data['probabilitas_diluar_negeri']='';
            $this->load->view('account/form_probabilitas',$data);
        }else{
            $probabilitas = $this->Probabilitas_model->get_id($id);
            $data['url_aksi'] = site_url('probabilitas/edit');
            $data['id'] = $probabilitas->id;
            $data['nama_barang'] =$probabilitas->nama_barang;           
            $data['probabilitas_didaerah']=$probabilitas->probabilitas_didaerah;
            $data['probabilitas_dalam_negeri'] =$probabilitas->probabilitas_dalam_negeri;
            $data['probabilitas_diluar_negeri'] =$probabilitas->probabilitas_diluar_negeri;
            $this->load->view('account/form_probabilitas',$data);
        }
    }

    public function edit(){
        $id = $this->input->post('id');
        $nama_barang = $this->input->post('nama_barang');
        $probabilitas_didaerah = $this->input->post('probabilitas_didaerah');
        $probabilitas_dalam_negeri = $this->input->post('probabilitas_dalam_negeri');
        $probabilitas_diluar_negeri = $this->input->post('probabilitas_diluar_negeri');
        $data = array(
            'nama_barang' => $nama_barang,
            'probabilitas_didaerah' => $probabilitas_didaerah,
            'probabilitas_dalam_negeri' => $probabilitas_dalam_negeri,
            'probabilitas_diluar_negeri' => $probabilitas_diluar_negeri,            
        );
        $this->Probabilitas_model->update($data,$id);
        $this->session->set_flashdata('message', 'Data Berhasil Diupdate');
        redirect('probabilitas');
    }
}
?>