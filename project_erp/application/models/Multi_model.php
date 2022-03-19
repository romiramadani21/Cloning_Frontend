<?php

defined('BASEPATH') or exit ('No direct script access allowe');

class Multi_model extends CI_Model{

    public $table ="inventorymmgl";
    public function __construct(){
        parent::__construct();
    }

    public function get(){
        return $this->db->get($this->table)->result();
    }

    public function get_id($id){
        $this->db->where('id_gudang',$id);
        return $this->db->get($this->table)->row();
    }

    public function delete($id){
        $this->db->where('id_gudang',$id);
        $this->db->delete($this->table);
    }

    public function insert($data){
        $this->db->insert($this->table,$data);
    }
    
    public function update($data,$id){
        $this->db->where('id_gudang',$id);
        $this->db->update($this->table,$data);
    }
}
?>