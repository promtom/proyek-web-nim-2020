<?php
class Blog extends CI_Controller{
    function __construct() {
        parent::__construct();
    } 
/*
    function test(){
        echo "hello";
    }
*/
    function index(){
        $data['judul'] = "This is blog";
        $data['konten'] = "This is blog";
        $data['_view'] = "page/blog";
        $this->load->view('layouts/main', $data);
    }

    function tabel(){
        $data['judul'] = "This is sample tabel";
        $data['konten'] = "This is tabel";
        $data['_view'] = "page/table";
        $this->load->view('layouts/main', $data);
    }
}
?>