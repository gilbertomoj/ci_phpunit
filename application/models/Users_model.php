<?php

class Users_model extends CI_Model
{
    public function index()
    {
        return $this->db->get("tb_users")->result_array();
    }
}
?>