<?php

defined ('BASEPATH') or exit('No direct script access allowe');

Class Financial extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Financial_model');
    }
    public function index(){

        $data['judul'] = "Financial Management";
        $data['data'] = $this->Financial_model->get();
        $this->load->view('account/list_financial',$data);
    }

    public function hapus($id)
	{
        $this->Financial_model->delete($id);
        $this->session->set_flashdata('message', 'Data Berhasil Dihapus');
        redirect('financial');
	}
	public function financial_form()
	{
        $data['judul'] = "Financial Management";
		$this->load->view('form_financial',$data);
    }
    
    public function tambah(){
        $pendapatan = $this->input->post('pendapatan');
        $accounts_receivable = $this->input->post('accounts_receivable');
        $accounts_payable = $this->input->post('accounts_payable');
      
        $data = array(
            'pendapatan' => $pendapatan,
            'accounts_receivable' => $accounts_receivable,
            'accounts_payable' => $accounts_payable,
       
        );
        $this->Financial_model->insert($data);
        $this->session->set_flashdata('message', 'Data Berhasil Ditambah');
        redirect('financial');
    }

    public function form($id=""){
        if($id == ""){
            $data['url_aksi'] = site_url('financial/tambah');
            $data['id']='';
            $data['pendapatan']='';
            $data['accounts_receivable']='';
            $data['accounts_payable']='';
        
            $this->load->view('account/form_financial',$data);
        }else{
            $financial = $this->Financial_model->get_id($id);
            $data['url_aksi'] = site_url('financial/edit');
            $data['id'] = $financial->id;
            $data['pendapatan'] =$financial->pendapatan;
            $data['accounts_receivable']=$financial->accounts_receivable;
            $data['accounts_payable']=$financial->accounts_payable;
       
            $this->load->view('account/form_financial',$data);
        }
    }

    public function edit(){
        $id = $this->input->post('id');
        $pendapatan = $this->input->post('pendapatan');
        $accounts_receivable = $this->input->post('accounts_receivable');
        $accounts_payable = $this->input->post('accounts_payable');
       
      
        $data = array(
            'pendapatan' => $pendapatan,
            'accounts_receivable' => $accounts_receivable,
            'accounts_payable' => $accounts_payable,
         
        
        );
        $this->Financial_model->update($data,$id);
        $this->session->set_flashdata('message', 'Data Berhasil Diupdate');
        redirect('financial');
    }
}
?>