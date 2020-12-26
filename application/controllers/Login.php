<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('username')) {
            redirect('home');
        } //check session
        $this->load->model('auth_model');
    }

    public function index() {
        $data["judul"] = "Login";
        $this->load->view('auth/login', $data);
    }

    public function validasi(){
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);

        $cek_user = $this->auth_model->cekLogin($username);
        if ($cek_user) {
            if (password_verify($password, $cek_user["password"])) {
                $sessionData = [
                    'id_u' => $cek_user['ID'],
                    'name' => $cek_user['name'],
                    'username' => $cek_user['username'],
                    'status' => $cek_user['status'],
                    'foto' => $cek_user['foto'],
                ];
                $this->session->set_userdata($sessionData);
                $this->session->set_flashdata('success', 'Selamat Datang!');
                redirect('home');
            } 
            else {
                $this->session->set_flashdata('fail', 'Password yang anda masukkan salah !');
                redirect('login');
            }
        }
        else {
            $this->session->set_flashdata('fail', 'Username yang anda masukkan salah !');
            redirect('login');
        }
    }
}
