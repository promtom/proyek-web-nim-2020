<?php
class Jurusan_model extends CI_Model{
    
    private $table_name= "tb_jurusan";
    private $primerykey= "jurusan_id";

    function __construct() {
        parent::__construct();
    }
    
    function get_jurusan($id) {
        return $this->db->get_where($this->table_name,array($this->primerykey=>$id))->row_array();
    }
      
    function show_jurusan() {
        $this->db->order_by($this->primerykey, 'desc');
        return $this->db->get($this->table_name)->result_array();
    }
        
    function add_jurusan($params){
        $this->db->insert($this->table_name,$params);
        return $this->db->insert_id();
    }
    
    function update_jurusan($id,$params){
        $this->db->where($this->primerykey,$id);
        return $this->db->update($this->table_name,$params);
    }
    
    function delete_jurusan($id){
        return $this->db->delete($this->table_name,array($this->primerykey=>$id));
    }
}
?>