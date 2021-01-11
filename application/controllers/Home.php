<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('login');
        } //check session
        $this->load->model('auth_model');
    }

    public function index() {
        $data["mHome"] = true;
        $data["judul"] = "Dashboard";
        $data["total"] = [
            "total_user" => $this->auth_model->getCount('user'),
            "total_mhs" => $this->auth_model->getCount('tb_mahasiswa'),
            "total_dsn" => $this->auth_model->getCount('tb_dosen'),
            "total_mk" => $this->auth_model->getCount('tb_matakuliah')
        ];
        $data["konten"] = "page/home";
        $this->load->view("layouts/main2", $data);
    }

    public function editPass($id) {
        $update = array(
            'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT)
        );
        try{
            $this->auth_model->chagePass($id,$update);
            $this->session->set_flashdata('success', 'Anda berhasil mengubah password');
        }
        catch(Exception $eror){
            $this->session->set_flashdata('fail', 'Anda gagal mengubah password');
        }
        // redirect("home");
        echo '<script>javascript:history.back()</script>';
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect("login");
    }
}
