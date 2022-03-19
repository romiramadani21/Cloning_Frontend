<?php

defined ('BASEPATH') or exit('No direct script access allowe');

Class Price extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Price_model');
    }
    public function index(){

        $data['judul'] = "Multi Price List";
        $data['data'] = $this->Price_model->get();
        $this->load->view('crm/list_price',$data);
    }

    public function hapus($id)
	{
        $this->Price_model->delete($id);
        $this->session->set_flashdata('message', 'Data Berhasil Dihapus');
        redirect('Price');
	}
	public function price_form()
	{
        $data['judul'] = "Multi Price List";
		$this->load->view('crm/form_price',$data);
    }
    
    public function tambah(){
        $nama_barang = $this->input->post('nama_barang');
        $harga = $this->input->post('harga');
        $diskon = $this->input->post('diskon');
      
        $data = array(
            'nama_barang' => $nama_barang,
            'harga' => $harga,
            'diskon' => $diskon,
           
        );
        $this->Price_model->insert($data);
        $this->session->set_flashdata('message', 'Data Berhasil Ditambah');
        redirect('price');
    }

    public function form($id=""){
        if($id == ""){
            $data['url_aksi'] = site_url('price/tambah');
            $data['id']='';
            $data['nama_barang']='';           
            $data['harga']='';
            $data['diskon']='';
          
            $this->load->view('crm/form_price',$data);
        }else{
            $price = $this->Price_model->get_id($id);
            $data['url_aksi'] = site_url('price/edit');
            $data['id'] = $price->id;
            $data['nama_barang'] =$price->nama_barang;           
            $data['harga']=$price->harga;
            $data['diskon'] =$price->diskon;
         
            $this->load->view('crm/form_price',$data);
        }
    }

    public function edit(){
        $id = $this->input->post('id');
        $nama_barang = $this->input->post('nama_barang');
        $harga = $this->input->post('harga');
        $diskon = $this->input->post('diskon');
      
        $data = array(
            'nama_barang' => $nama_barang,
            'harga' => $harga,
            'diskon' => $diskon,
                       
        );
        $this->Price_model->update($data,$id);
        $this->session->set_flashdata('message', 'Data Berhasil Diupdate');
        redirect('price');
    }
}
?>