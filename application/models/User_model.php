<?php
class User_model extends CI_Model{
    
    private $table_name= "user";
    private $primerykey= "ID";

    function __construct() {
        parent::__construct();
    }
    
    function get_user($id) {
        return $this->db->get_where($this->table_name,array($this->primerykey=>$id))->row_array();
    }
      
    function show_user() {
        $this->db->order_by($this->primerykey, 'desc');
        return $this->db->get($this->table_name)->result_array();
    }
        
    function add_user($params){
        $this->db->insert($this->table_name,$params);
        return $this->db->insert_id();
    }
    
    function update_user($id,$params){
        $this->db->where($this->primerykey,$id);
        return $this->db->update($this->table_name,$params);
    }
    
    function delete_user($id){
        return $this->db->delete($this->table_name,array($this->primerykey=>$id));
    }
}
?>