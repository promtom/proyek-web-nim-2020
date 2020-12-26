<?php
class Dosen_model extends CI_Model{
    
    private $table_name= "tb_dosen";
    private $primerykey= "NID";

    function __construct() {
        parent::__construct();
    }
    
    function get_dosen($id) {
        return $this->db->get_where($this->table_name,array($this->primerykey=>$id))->row_array();
    }
      
    function show_dosen() {
        $this->db->order_by($this->primerykey, 'desc');
        return $this->db->get($this->table_name)->result_array();
    }
        
    function add_dosen($params){
        $this->db->insert($this->table_name,$params);
        return $this->db->insert_id();
    }
    
    function update_dosen($id,$params){
        $this->db->where($this->primerykey,$id);
        return $this->db->update($this->table_name,$params);
    }
    
    function delete_dosen($id){
        return $this->db->delete($this->table_name,array($this->primerykey=>$id));
    }
}
?>