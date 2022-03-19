<?php

defined ('BASEPATH') or exit('No direct script access allowe');

Class Sales extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Sales_model');
    }
    public function index(){

        $data['judul'] = "Sales Management Order";
        $data['data'] = $this->Sales_model->get();
        $this->load->view('crm/list_sales',$data);
    }

    public function hapus($id)
	{
        $this->Sales_model->delete($id);
        $this->session->set_flashdata('message', 'Data Berhasil Dihapus');
        redirect('Sales');
	}
	public function sales_form()
	{
        $data['judul'] = "Sales Management Order";
		$this->load->view('crm/form_sales',$data);
    }
    
    public function tambah(){
        $nama_item = $this->input->post('nama_item');
        $tgl_pembelian = $this->input->post('tgl_pembelian');
        $harga_satuan = $this->input->post('harga_satuan');
        $harga_total = $this->input->post('harga_total');
        $jumlah_item = $this->input->post('jumlah_item');
        $data = array(
            'nama_item' => $nama_item,
            'tgl_pembelian' => $tgl_pembelian,
            'harga_satuan' => $harga_satuan,
            'harga_total' => $harga_total,
            'jumlah_item' => $jumlah_item,
        );
        $this->Sales_model->insert($data);
        $this->session->set_flashdata('message', 'Data Berhasil Ditambah');
        redirect('sales');
    }

    public function form($id=""){
        if($id == ""){
            $data['url_aksi'] = site_url('sales/tambah');
            $data['id']='';
            $data['nama_item']='';           
            $data['tgl_pembelian']='';
            $data['harga_satuan']='';
            $data['harga_total']='';
            $data['jumlah_item']='';
            $this->load->view('crm/form_sales',$data);
        }else{
            $sales = $this->Sales_model->get_id($id);
            $data['url_aksi'] = site_url('sales/edit');
            $data['id'] = $sales->id;
            $data['nama_item'] =$sales->nama_item;           
            $data['tgl_pembelian']=$sales->tgl_pembelian;
            $data['harga_satuan'] =$sales->harga_satuan;
            $data['harga_total'] =$sales->harga_total;
            $data['jumlah_item'] =$sales->jumlah_item;
            $this->load->view('crm/form_sales',$data);
        }
    }

    public function edit(){
        $id = $this->input->post('id');
        $nama_item = $this->input->post('nama_item');
        $tgl_pembelian = $this->input->post('tgl_pembelian');
        $harga_satuan = $this->input->post('harga_satuan');
        $harga_total = $this->input->post('harga_total');
        $jumlah_item = $this->input->post('jumlah_item');
        $data = array(
            'nama_item' => $nama_item,
            'tgl_pembelian' => $tgl_pembelian,
            'harga_satuan' => $harga_satuan,
            'harga_total' => $harga_total,
            'jumlah_item' => $jumlah_item,
        );
        $this->Sales_model->update($data,$id);
        $this->session->set_flashdata('message', 'Data Berhasil Diupdate');
        redirect('sales');
    }
}
?>