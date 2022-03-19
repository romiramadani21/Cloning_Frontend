<?php

defined ('BASEPATH') or exit('No direct script access allowe');

Class Manufactur extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Manufactur_model');
    }
    public function index(){

        $data['judul'] = "Management Manufacturing";
        $data['data'] = $this->Manufactur_model->get();
        $this->load->view('manufactur/list_manufactur',$data);
    }

    public function hapus($id)
	{
        $this->Manufactur_model->delete($id);
        $this->session->set_flashdata('message', 'Data Berhasil Dihapus');
        redirect('Manufactur');
	}
	public function manufactur_form()
	{
        $data['judul'] = "Management Manufacturing";
		$this->load->view('manufactur/form_manufactur',$data);
    }
    
    public function tambah(){
        $nama_material = $this->input->post('nama_material');
        $mesin = $this->input->post('mesin');
        $target_pemasaran = $this->input->post('target_pemasaran');
        $data = array(
            'nama_material' => $nama_material,
            'mesin' => $mesin,
            'target_pemasaran' => $target_pemasaran,
        );
        $this->Manufactur_model->insert($data);
        $this->session->set_flashdata('message', 'Data Berhasil Ditambah');
        redirect('manufactur');
    }

    public function form($id=""){
        if($id == ""){
            $data['url_aksi'] = site_url('manufactur/tambah');
            $data['id']='';
            $data['nama_material']='';           
            $data['mesin']='';
            $data['target_pemasaran']='';
            $this->load->view('manufactur/form_manufactur',$data);
        }else{
            $manufactur = $this->Manufactur_model->get_id($id);
            $data['url_aksi'] = site_url('manufactur/edit');
            $data['id'] = $manufactur->id;
            $data['nama_material'] =$manufactur->nama_material;           
            $data['mesin']=$manufactur->mesin;
            $data['target_pemasaran'] =$manufactur->target_pemasaran;
            $this->load->view('manufactur/form_manufactur',$data);
        }
    }

    public function edit(){
        $id = $this->input->post('id');
        $nama_material = $this->input->post('nama_material');
        $mesin = $this->input->post('mesin');
        $target_pemasaran = $this->input->post('target_pemasaran');
        $data = array(
            'nama_material' => $nama_material,
            'mesin' => $mesin,
            'target_pemasaran' => $target_pemasaran,
        );
        $this->Manufactur_model->update($data,$id);
        $this->session->set_flashdata('message', 'Data Berhasil Diupdate');
        redirect('manufactur');
    }
}
?>