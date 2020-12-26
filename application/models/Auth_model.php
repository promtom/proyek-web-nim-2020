<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model {
    private $table_name = 'user';
    private $primerykey = "ID";

    function __construct() {
        parent::__construct();
    }

    public function cekLogin($username){
        return $this->db->get_where($this->table_name, ['username' => $username])->row_array();
    }

    function chagePass($id,$params){
        $this->db->where($this->primerykey,$id);
        return $this->db->update($this->table_name,$params);
    }

    public function getCount($table){
        return $this->db->count_all($table);
    }
}
