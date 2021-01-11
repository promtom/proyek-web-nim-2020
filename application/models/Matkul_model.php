<?php
class Matkul_model extends CI_Model{
    
    private $table_name= "tb_matkul";
    private $primerykey= "matkul_id";

    function __construct() {
        parent::__construct();
    }
    
    function get_matkul($id) {
        return $this->db->get_where($this->table_name,array($this->primerykey=>$id))->row_array();
    }
      
    function show_matkul() {
        $this->db->order_by($this->primerykey, 'desc');
        return $this->db->get($this->table_name)->result_array();
    }
        
    function add_matkul($params){
        $this->db->insert($this->table_name,$params);
        return $this->db->insert_id();
    }
    
    function update_matkul($id,$params){
        $this->db->where($this->primerykey,$id);
        return $this->db->update($this->table_name,$params);
    }
    
    function delete_matkul($id){
        return $this->db->delete($this->table_name,array($this->primerykey=>$id));
    }
}
?>