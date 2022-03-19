<?php

defined ('BASEPATH') or exit('No direct script access allowe');

Class Supplier extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Supplier_model');
    }
    public function index(){

        $data['judul'] = "Supplier";
        $data['data'] = $this->Supplier_model->get();
        $this->load->view('purchase/list_supplier',$data);
    }

    public function hapus($id)
	{
        $this->Supplier_model->delete($id);
        $this->session->set_flashdata('message', 'Data Berhasil Dihapus');
        redirect('supplier');
	}
	public function supplier_form()
	{
        $data['judul'] = "Data supplier";
		$this->load->view('form_supplier',$data);
    }
    
    public function tambah(){
        $nama_perusahaan = $this->input->post('nama_perusahaan');
        $kode_perusahaan = $this->input->post('kode_perusahaan');
        $alamat_perusahaan = $this->input->post('alamat_perusahaan');
        $no_hp = $this->input->post('no_hp');
        $kode_pos = $this->input->post('kode_pos');
        $data = array(
            'nama_perusahaan' => $nama_perusahaan,
            'kode_perusahaan' => $kode_perusahaan,
            'alamat_perusahaan' => $alamat_perusahaan,
            'no_hp' => $no_hp,
            'kode_pos' => $kode_pos,
        );
        $this->Supplier_model->insert($data);
        $this->session->set_flashdata('message', 'Data Berhasil Ditambah');
        redirect('supplier');
    }

    public function form($id=""){
        if($id == ""){
            $data['url_aksi'] = site_url('supplier/tambah');
            $data['id']='';
            $data['nama_perusahaan']='';
            $data['kode_perusahaan']='';
            $data['alamat_perusahaan']='';
            $data['no_hp']='';
            $data['kode_pos']='';
            $this->load->view('purchase/form_supplier',$data);
        }else{
            $supplier = $this->Supplier_model->get_id($id);
            $data['url_aksi'] = site_url('supplier/edit');
            $data['id'] = $supplier->id;
            $data['nama_perusahaan'] =$supplier->nama_perusahaan;
            $data['kode_perusahaan']=$supplier->kode_perusahaan;
            $data['alamat_perusahaan']=$supplier->alamat_perusahaan;
            $data['no_hp'] =$supplier->no_hp;
            $data['kode_pos'] =$supplier->kode_pos;
            $this->load->view('purchase/form_supplier',$data);
        }
    }

    public function edit(){
        $id = $this->input->post('id');
        $nama_perusahaan = $this->input->post('nama_perusahaan');
        $kode_perusahaan = $this->input->post('kode_perusahaan');
        $alamat_perusahaan = $this->input->post('alamat_perusahaan');
        $kode_perusahaan = $this->input->post('kode_perusahaan');
        $no_hp = $this->input->post('no_hp');
        $kode_pos = $this->input->post('kode_pos');
        $data = array(
            'nama_perusahaan' => $nama_perusahaan,
            'kode_perusahaan' => $kode_perusahaan,
            'alamat_perusahaan' => $alamat_perusahaan,
            'kode_perusahaan' => $kode_perusahaan,
            'no_hp' => $no_hp,
            'kode_pos' => $kode_pos,
        );
        $this->Supplier_model->update($data,$id);
        $this->session->set_flashdata('message', 'Data Berhasil Diupdate');
        redirect('supplier');
    }
}
?>