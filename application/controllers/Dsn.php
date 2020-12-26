<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dsn extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('login');
        } //check session
        $this->load->model('Dosen_model');
    }

    public function index() {
        $data["mDsn"] = true;
        $data["judul"] = "dosen";
        $data['dosen'] = $this->Dosen_model->show_dosen();
        $data["konten"] = "page/dsn/index";
        $this->load->view("layouts/main2", $data);
    }

    public function add() {
        $data['list'] = $this->Dosen_model->show_dosen();
        if(isset($_POST) && count($_POST) > 0){   
            $store = array(
				'NID' => $this->input->post('NID'),
				'dsn_nama' => $this->input->post('dsn_nama'),
				'dsn_tpt_lhr' => $this->input->post('dsn_tpt_lhr'),
				'dsn_tgl_lhr' => $this->input->post('dsn_tgl_lhr'),
            );
            try{
                $dosen_id = $this->Dosen_model->add_dosen($store);
                $this->session->set_flashdata('success', 'Anda berhasil menambahkan data');
            }
            catch(Exception $eror){
                $this->session->set_flashdata('fail', 'Anda gagal menambahkan data');
            }
            redirect('dsn/index');
        }
        else {
            $data["mDsn"] = true;
            $data["judul"] = "dosen";
            $data["konten"] = "page/dsn/add";
            $this->load->view("layouts/main2", $data);
        }
    }

    public function edit($NID) {
        $data['dosen'] = $this->Dosen_model->get_dosen($NID);//cari data
        $data['list'] = $this->Dosen_model->show_dosen();
        if(isset($data['dosen']['NID'])){
            if(isset($_POST) && count($_POST) > 0) {   
                $update = array(
                    'NID' => $this->input->post('NID'),
					'dsn_nama' => $this->input->post('dsn_nama'),
					'dsn_tpt_lhr' => $this->input->post('dsn_tpt_lhr'),
					'dsn_tgl_lhr' => $this->input->post('dsn_tgl_lhr'),
                );
                
                try{
                    $this->Dosen_model->update_dosen($NID,$update); 
                    $this->session->set_flashdata('success', 'Anda berhasil mengedit data');
                }
                catch(Exception $eror){
                    $this->session->set_flashdata('fail', 'Anda gagal mengedit data');
                }           
                redirect('dsn/index');
            }
            else{
                $data["mDsn"] = true;
                $data["judul"] = "dosen";
                $data["konten"] = "page/dsn/edit";
                $this->load->view("layouts/main2", $data);
            }
        }
        else {
            $this->session->set_flashdata('fail', 'Edit dosen gagal! Ya iyalah datanya gak ada -_-');
            redirect('dsn/index');
        }
    }

    function delete($NID){
        $dosen = $this->Dosen_model->get_dosen($NID);
        
        if(isset($dosen['NID'])){
            try{
                $this->Dosen_model->delete_dosen($NID);
                $this->session->set_flashdata('success', 'Anda berhasil menhapus data');
            }
            catch(Exception $eror){
                $this->session->set_flashdata('fail', 'Anda gagal menghapus data');
            }
            redirect('dsn/index');
        }
        else {
            $this->session->set_flashdata('fail', 'Hapus dosen gagal! Ya iyalah datanya gak ada -_-');
            redirect('dsn/index');
        }
    }
}
