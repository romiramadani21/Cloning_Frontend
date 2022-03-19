<?php

defined('BASEPATH') or exit ('No direct script access allowe');

class Login extends CI_Model{
    public function cek_login($table,$where){
            return $this->db->get_where($table,$where);
    }
}
?>