<?php

defined ('BASEPATH') or exit('No direct script access allowe');

Class Kalkulasi extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Kalkulasi_model');
    }
    public function index(){

        $data['judul'] = "Kalkulasi Penyusutan";
        $data['data'] = $this->Kalkulasi_model->get();
        $this->load->view('account/list_kalkulasi',$data);
    }

    public function hapus($id)
	{
        $this->Kalkulasi_model->delete($id);
        $this->session->set_flashdata('message', 'Data Berhasil Dihapus');
        redirect('kalkulasi');
	}
	public function kalkulasi_form()
	{
        $data['judul'] = "Kalkulasi Penyusutan";
		$this->load->view('form_kalkulasi',$data);
    }
    
    public function tambah(){
        $nama_barang = $this->input->post('nama_barang');
        $harga_perolehan = $this->input->post('harga_perolehan');
  
      
        $data = array(
            'nama_barang' => $nama_barang,
            'harga_perolehan' => $harga_perolehan,
            
        );
        $this->Kalkulasi_model->insert($data);
        $this->session->set_flashdata('message', 'Data Berhasil Ditambah');
        redirect('kalkulasi');
    }

    public function form($id=""){
        if($id == ""){
            $data['url_aksi'] = site_url('kalkulasi/tambah');
            $data['id']='';
            $data['nama_barang']='';
            $data['harga_perolehan']='';
         
            $this->load->view('account/form_kalkulasi',$data);
        }else{
            $kalkulasi = $this->Kalkulasi_model->get_id($id);
            $data['url_aksi'] = site_url('kalkulasi/edit');
            $data['id'] = $kalkulasi->id;
            $data['nama_barang'] =$kalkulasi->nama_barang;
            $data['harga_perolehan']=$kalkulasi->harga_perolehan;
          
            $this->load->view('account/form_kalkulasi',$data);
        }
    }

    public function edit(){
        $id = $this->input->post('id');
        $nama_barang = $this->input->post('nama_barang');
        $harga_perolehan = $this->input->post('harga_perolehan');
     
      
        $data = array(
            'nama_barang' => $nama_barang,
            'harga_perolehan' => $harga_perolehan,
        
        );
        $this->Kalkulasi_model->update($data,$id);
        $this->session->set_flashdata('message', 'Data Berhasil Diupdate');
        redirect('kalkulasi');
    }
}
?>