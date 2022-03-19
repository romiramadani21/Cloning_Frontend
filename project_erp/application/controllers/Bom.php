<?php

defined ('BASEPATH') or exit('No direct script access allowe');

Class Bom extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Bom_model');
    }
    public function index(){

        $data['judul'] = "Bill Off Material";
        $data['data'] = $this->Bom_model->get();
        $this->load->view('manufactur/list_bom',$data);
    }

    public function hapus($id)
	{
        $this->Bom_model->delete($id);
        $this->session->set_flashdata('message', 'Data Berhasil Dihapus');
        redirect('Bom');
	}
	public function bom_form()
	{
        $data['judul'] = "Bill Off Material";
		$this->load->view('manufactur/form_bom',$data);
    }
    
    public function tambah(){
        $nama_komponen = $this->input->post('nama_komponen');
        $deskripsi_komponen = $this->input->post('deskripsi_komponen');
        $kualitas = $this->input->post('kualitas');
        $lead_time = $this->input->post('lead_time');
        $data = array(
            'nama_komponen' => $nama_komponen,
            'deskripsi_komponen' => $deskripsi_komponen,
            'kualitas' => $kualitas,
            'lead_time' => $lead_time,
        );
        $this->Bom_model->insert($data);
        $this->session->set_flashdata('message', 'Data Berhasil Ditambah');
        redirect('bom');
    }

    public function form($id=""){
        if($id == ""){
            $data['url_aksi'] = site_url('bom/tambah');
            $data['id']='';
            $data['nama_komponen']='';           
            $data['deskripsi_komponen']='';
            $data['kualitas']='';
            $data['lead_time']='';
            $this->load->view('manufactur/form_bom',$data);
        }else{
            $bom = $this->Bom_model->get_id($id);
            $data['url_aksi'] = site_url('bom/edit');
            $data['id'] = $bom->id;
            $data['nama_komponen'] =$bom->nama_komponen;           
            $data['deskripsi_komponen']=$bom->deskripsi_komponen;
            $data['kualitas'] =$bom->kualitas;
            $data['lead_time'] =$bom->lead_time;
            $this->load->view('manufactur/form_bom',$data);
        }
    }

    public function edit(){
        $id = $this->input->post('id');
        $nama_komponen = $this->input->post('nama_komponen');
        $deskripsi_komponen = $this->input->post('deskripsi_komponen');
        $kualitas = $this->input->post('kualitas');
        $lead_time = $this->input->post('lead_time');
        $data = array(
            'nama_komponen' => $nama_komponen,
            'deskripsi_komponen' => $deskripsi_komponen,
            'kualitas' => $kualitas,
            'lead_time' => $lead_time,            
        );
        $this->Bom_model->update($data,$id);
        $this->session->set_flashdata('message', 'Data Berhasil Diupdate');
        redirect('bom');
    }
}
?>