<?php

defined ('BASEPATH') or exit('No direct script access allowe');

Class Product extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Product_model');
    }
    public function index(){

        $data['judul'] = "Data Product";
        $data['data'] = $this->Product_model->get();
        $this->load->view('purchase/list_product',$data);
    }

    public function hapus($id)
	{
        $this->Product_model->delete($id);
        $this->session->set_flashdata('message', 'Data Berhasil Dihapus');
        redirect('product');
	}
	public function product_form()
	{
        $data['judul'] = "Data Product";
		$this->load->view('form_product',$data);
    }
    
    public function tambah(){
        $nama_product = $this->input->post('nama_product');
        $kode_product = $this->input->post('kode_product');
        $harga = $this->input->post('harga');
        $discount = $this->input->post('discount');
        $tanggal_pesan = $this->input->post('tanggal_pesan');
        $data = array(
            'nama_product' => $nama_product,
            'kode_product' => $kode_product,
            'harga' => $harga,
            'discount' => $discount,
            'tanggal_pesan' => $tanggal_pesan,
        );
        $this->Product_model->insert($data);
        $this->session->set_flashdata('message', 'Data Berhasil Ditambah');
        redirect('product');
    }

    public function form($id=""){
        if($id == ""){
            $data['url_aksi'] = site_url('product/tambah');
            $data['id']='';
            $data['nama_product']='';
            $data['kode_product']='';
            $data['harga']='';
            $data['discount']='';
            $data['tanggal_pesan']='';
            $this->load->view('purchase/form_product',$data);
        }else{
            $product = $this->Product_model->get_id($id);
            $data['url_aksi'] = site_url('product/edit');
            $data['id'] = $product->id;
            $data['nama_product'] =$product->nama_product;
            $data['kode_product']=$product->kode_product;
            $data['harga']=$product->harga;
            $data['discount'] =$product->discount;
            $data['tanggal_pesan'] =$product->tanggal_pesan;
            $this->load->view('purchase/form_product',$data);
        }
    }

    public function edit(){
        $id = $this->input->post('id');
        $nama_product = $this->input->post('nama_product');
        $kode_product = $this->input->post('kode_product');
        $harga = $this->input->post('harga');
        $kode_product = $this->input->post('kode_product');
        $discount = $this->input->post('discount');
        $tanggal_pesan = $this->input->post('tanggal_pesan');
        $data = array(
            'nama_product' => $nama_product,
            'kode_product' => $kode_product,
            'harga' => $harga,
            'kode_product' => $kode_product,
            'discount' => $discount,
            'tanggal_pesan' => $tanggal_pesan,
        );
        $this->Product_model->update($data,$id);
        $this->session->set_flashdata('message', 'Data Berhasil Diupdate');
        redirect('product');
    }
}
?>