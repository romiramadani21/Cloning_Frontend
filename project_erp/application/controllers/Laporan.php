<?php

defined ('BASEPATH') or exit('No direct script access allowe');

Class Laporan extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Laporan_model');
    }
    public function index(){

        $data['judul'] = "Laporan";
        $data['data'] = $this->Laporan_model->get();
        $this->load->view('account/list_laporan',$data);
    }

    public function hapus($id)
	{
        $this->Laporan_model->delete($id);
        $this->session->set_flashdata('message', 'Data Berhasil Dihapus');
        redirect('laporan');
	}
	public function laporan_form()
	{
        $data['judul'] = "Laporan";
		$this->load->view('form_laporan',$data);
    }
    
    public function tambah(){
        $tanggal = $this->input->post('tanggal');
        $keterangan = $this->input->post('keterangan');
        $debet = $this->input->post('debet');
        $kredit = $this->input->post('kredit');
     
        $data = array(
            'tanggal' => $tanggal,
            'keterangan' => $keterangan,
            'debet' => $debet,
            'kredit' => $kredit,
          
        );
        $this->Laporan_model->insert($data);
        $this->session->set_flashdata('message', 'Data Berhasil Ditambah');
        redirect('laporan');
    }

    public function form($id=""){
        if($id == ""){
            $data['url_aksi'] = site_url('laporan/tambah');
            $data['id']='';
            $data['tanggal']='';
            $data['keterangan']='';
            $data['debet']='';
            $data['kredit']='';
         
            $this->load->view('account/form_laporan',$data);
        }else{
            $laporan = $this->Laporan_model->get_id($id);
            $data['url_aksi'] = site_url('laporan/edit');
            $data['id'] = $laporan->id;
            $data['tanggal'] =$laporan->tanggal;
            $data['keterangan']=$laporan->keterangan;
            $data['debet']=$laporan->debet;
            $data['kredit'] =$laporan->kredit;
        
            $this->load->view('account/form_laporan',$data);
        }
    }

    public function edit(){
        $id = $this->input->post('id');
        $tanggal = $this->input->post('tanggal');
        $keterangan = $this->input->post('keterangan');
        $debet = $this->input->post('debet');
        $keterangan = $this->input->post('keterangan');
        $kredit = $this->input->post('kredit');
     
        $data = array(
            'tanggal' => $tanggal,
            'keterangan' => $keterangan,
            'debet' => $debet,
            'keterangan' => $keterangan,
            'kredit' => $kredit,
          
        );
        $this->Laporan_model->update($data,$id);
        $this->session->set_flashdata('message', 'Data Berhasil Diupdate');
        redirect('laporan');
    }
}
?>