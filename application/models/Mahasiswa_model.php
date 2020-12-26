<?php
class Mahasiswa_model extends CI_Model{
    
    private $table_name= "tb_mahasiswa";
    private $primerykey= "NIM";

    function __construct() {
        parent::__construct();
    }
    
    function get_mahasiswa($id) {
        return $this->db->get_where($this->table_name,array($this->primerykey=>$id))->row_array();
    }
      
    function show_mahasiswa() {
        $this->db->order_by($this->primerykey, 'desc');
        return $this->db->get($this->table_name)->result_array();
    }
        
    function add_mahasiswa($params){
        $this->db->insert($this->table_name,$params);
        return $this->db->insert_id();
    }
    
    function update_mahasiswa($id,$params){
        $this->db->where($this->primerykey,$id);
        return $this->db->update($this->table_name,$params);
    }
    
    function delete_mahasiswa($id){
        return $this->db->delete($this->table_name,array($this->primerykey=>$id));
    }
}
?>