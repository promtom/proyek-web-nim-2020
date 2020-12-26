<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('login');
        } //check session
        $this->load->model('User_model');
    }

    public function index() {
        $data["mUser"] = true;
        $data["judul"] = "user";
        $data["konten"] = "page/InBuild";
        // $data['user'] = $this->User_model->show_user();
        // $data["konten"] = "page/user/index";
        $this->load->view("layouts/main2", $data);
    }
}
