<?php

defined('BASEPATH') or exit ('No direct script access allowe');

class M_login extends CI_Model{

    public $table ="user";
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function get(){
        return $this->db->get($this->table)->result();
    }

    public function get_id($id){
        $this->db->where('id',$id);
        return $this->db->get($this->table)->row();
    }

    public function delete($id){
        $this->db->where('id',$id);
        $this->db->delete($this->table);
    }

    public function insert($data){
        $this->db->insert($this->table,$data);
    }
    
    public function update($data,$id){
        $this->db->where('id',$id);
        $this->db->update($this->table,$data);
    }

    public function cekLogin($data){
        $this->db->where($data);
        return $this->db->get('user');
    }

    function login_user($username,$password)
	{
        $query = $this->db->get_where('user',array('username'=>$username));
        if($query->num_rows() > 0)
        {
            $data_user = $query->row();
            if (password_verify($password, $data_user->password)) {
                $this->session->set_userdata('username',$username);
				$this->session->set_userdata('nama',$data_user->nama);
				$this->session->set_userdata('is_login',TRUE);
                return TRUE;
            } else {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
    }
    
    function cek_login()
    {
        if(empty($this->session->userdata('is_login')))
        {
			redirect('login');
		}
    }
}
?>
