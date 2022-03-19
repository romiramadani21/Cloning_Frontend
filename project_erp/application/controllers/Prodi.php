<?php

defined ('BASEPATH') or exit('No direct script access allowe');

Class Prodi extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Prodi_model');
    }
    public function index(){

        $data['judul'] = "Data Prodi";
        $data['program_studi'] = $this->Prodi_model->get();
        $this->load->view('prodi/list_prodi',$data);
    }

    public function hapus($id)
	{
        $this->Prodi_model->delete($id);
        $this->session->set_flashdata('message', 'Data Berhasil Dihapus');
        redirect('prodi');
	}
	public function form_prodi()
	{
        $data['judul'] = "Data Prodi";
		$this->load->view('prodi/form_prodi',$data);
    }
    
    public function tambah(){
        $nama_prodi = $this->input->post('nama_prodi');
        $jurusan = $this->input->post('jurusan');
        $akreditasi = $this->input->post('akreditasi');
        $jurusan = $this->input->post('jurusan');
        $nama_kaprodi = $this->input->post('nama_kaprodi');
        $output_lulusan = $this->input->post('output_lulusan');
        $tahun_berdiri = $this->input->post('tahun_berdiri');
        $data = array(
            'nama_prodi' => $nama_prodi,
            'jurusan' => $jurusan,
            'akreditasi' => $akreditasi,
            'jurusan' => $jurusan,
            'nama_kaprodi' => $nama_kaprodi,
            'output_lulusan' => $output_lulusan,
            'tahun_berdiri' => $tahun_berdiri,
        );
        $this->Prodi_model->insert($data);
        $this->session->set_flashdata('message', 'Data Berhasil Ditambah');
        redirect('prodi');
    }

    public function form($id=""){
        if($id == ""){
            $data['url_aksi'] = site_url('prodi/tambah');
            $data['id']='';
            $data['nama_prodi']='';
            $data['jurusan']='';
            $data['akreditasi']='';
            $data['nama_kaprodi']='';
            $data['output_lulusan']='';
            $data['tahun_berdiri']='';
            $this->load->view('prodi/form_prodi',$data);
        }else{
            $prodi = $this->Prodi_model->get_id($id);
            $data['url_aksi'] = site_url('prodi/edit');
            $data['id'] = $prodi->id;
            $data['nama_prodi'] =$prodi->nama_prodi;
            $data['jurusan']=$prodi->jurusan;
            $data['akreditasi']=$prodi->akreditasi;
            $data['nama_kaprodi'] =$prodi->nama_kaprodi;
            $data['output_lulusan']=$prodi->output_lulusan;
            $data['tahun_berdiri']=$prodi->tahun_berdiri;
            $this->load->view('prodi/form_prodi',$data);
        }
    }

    public function edit(){
        $id = $this->input->post('id');
        $nama_prodi = $this->input->post('nama_prodi');
        $jurusan = $this->input->post('jurusan');
        $akreditasi = $this->input->post('akreditasi');
        $jurusan = $this->input->post('jurusan');
        $nama_kaprodi = $this->input->post('nama_kaprodi');
        $output_lulusan = $this->input->post('output_lulusan');
        $tahun_berdiri = $this->input->post('tahun_berdiri');
        $data = array(
            'nama_prodi' => $nama_prodi,
            'jurusan' => $jurusan,
            'akreditasi' => $akreditasi,
            'jurusan' => $jurusan,
            'nama_kaprodi' => $nama_kaprodi,
            'output_lulusan' => $output_lulusan,
            'tahun_berdiri' => $tahun_berdiri,
        );
        $this->Prodi_model->update($data,$id);
        $this->session->set_flashdata('message', 'Data Berhasil Diupdate');
        redirect('prodi');
    }
}
?>