<?php

defined ('BASEPATH') or exit('No direct script access allowe');

Class Alamat extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Alamat_model');
    }
    public function index(){

        $data['judul'] = "Data Alamat";
        $data['data'] = $this->Alamat_model->get();
        $this->load->view('purchase/list_alamat',$data);
    }

    public function hapus($id)
	{
        $this->Alamat_model->delete($id);
        $this->session->set_flashdata('message', 'Data Berhasil Dihapus');
        redirect('alamat');
	}
	public function alamat_form()
	{
        $data['judul'] = "Data Alamat";
		$this->load->view('form_alamat',$data);
    }
    
    public function tambah(){
        $nama_perusahaan = $this->input->post('nama_perusahaan');
        $provinsi = $this->input->post('provinsi');
        $kabupaten = $this->input->post('kabupaten');
        $kecamatan = $this->input->post('kecamatan');
        $kode_pos = $this->input->post('kode_pos');
        $data = array(
            'nama_perusahaan' => $nama_perusahaan,
            'provinsi' => $provinsi,
            'kabupaten' => $kabupaten,
            'kecamatan' => $kecamatan,
            'kode_pos' => $kode_pos,
        );
        $this->Alamat_model->insert($data);
        $this->session->set_flashdata('message', 'Data Berhasil Ditambah');
        redirect('alamat');
    }

    public function form($id=""){
        if($id == ""){
            $data['url_aksi'] = site_url('alamat/tambah');
            $data['id']='';
            $data['nama_perusahaan']='';
            $data['provinsi']='';
            $data['kabupaten']='';
            $data['kecamatan']='';
            $data['kode_pos']='';
            $this->load->view('purchase/form_alamat',$data);
        }else{
            $alamat = $this->Alamat_model->get_id($id);
            $data['url_aksi'] = site_url('alamat/edit');
            $data['id'] = $alamat->id;
            $data['nama_perusahaan'] =$alamat->nama_perusahaan;
            $data['provinsi']=$alamat->provinsi;
            $data['kabupaten']=$alamat->kabupaten;
            $data['kecamatan'] =$alamat->kecamatan;
            $data['kode_pos'] =$alamat->kode_pos;
            $this->load->view('purchase/form_alamat',$data);
        }
    }

    public function edit(){
        $id = $this->input->post('id');
        $nama_perusahaan = $this->input->post('nama_perusahaan');
        $provinsi = $this->input->post('provinsi');
        $kabupaten = $this->input->post('kabupaten');
        $provinsi = $this->input->post('provinsi');
        $kecamatan = $this->input->post('kecamatan');
        $kode_pos = $this->input->post('kode_pos');
        $data = array(
            'nama_perusahaan' => $nama_perusahaan,
            'provinsi' => $provinsi,
            'kabupaten' => $kabupaten,
            'provinsi' => $provinsi,
            'kecamatan' => $kecamatan,
            'kode_pos' => $kode_pos,
        );
        $this->Alamat_model->update($data,$id);
        $this->session->set_flashdata('message', 'Data Berhasil Diupdate');
        redirect('alamat');
    }
}
?>