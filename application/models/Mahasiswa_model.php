<?php
class Mahasiswa_model extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    
    function get_mahasiswa($NIM) {
        return $this->db->get_where('tb_mahasiswa',array('NIM'=>$NIM))->row_array();
    }
      
    function show_mahasiswa() {
        $this->db->order_by('NIM', 'desc');
        return $this->db->get('tb_mahasiswa')->result_array();
    }
        
    function add_mahasiswa($params){
        $this->db->insert('tb_mahasiswa',$params);
        return $this->db->insert_id();
    }
    
    function update_mahasiswa($NIM,$params){
        $this->db->where('NIM',$NIM);
        return $this->db->update('tb_mahasiswa',$params);
    }
    
    function delete_mahasiswa($NIM){
        return $this->db->delete('tb_mahasiswa',array('NIM'=>$NIM));
    }
}
?>