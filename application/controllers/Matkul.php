<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matkul extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('login');
        } //check session
        $this->load->model('Matkul_model');
        $this->load->model('Jurusan_model');
    }

    public function index() {
        $data["mMatkul"] = true;
        $data["judul"] = "Matkul";
        $data["konten"] = "page/InBuild";
        $this->load->view("layouts/main2", $data);
    }
}
