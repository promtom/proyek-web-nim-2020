<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mhs extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('login');
        } //check session
        $this->load->model('Mahasiswa_model');
        $this->load->model('Jurusan_model');
    }

    public function index() {
        $data["mMhs"] = true;
        $data["judul"] = "Mahasiswa";
        $data['mahasiswa'] = $this->Mahasiswa_model->show_mahasiswa();
        $data['jurusan'] = $this->Jurusan_model->show_jurusan();
        $data["konten"] = "page/mhs/index";
        $this->load->view("layouts/main2", $data);
    }

    public function add() {
        $data['list'] = $this->Mahasiswa_model->show_mahasiswa();
        $data['jurusan'] = $this->Jurusan_model->show_jurusan();
        if(isset($_POST) && count($_POST) > 0){   
            $store = array(
				'NIM' => $this->input->post('NIM'),
				'mhs_nama' => $this->input->post('mhs_nama'),
				'mhs_tpt_lhr' => $this->input->post('mhs_tpt_lhr'),
				'mhs_tgl_lhr' => $this->input->post('mhs_tgl_lhr'),
				'mhs_jurusan' => $this->input->post('mhs_jurusan'),
				'mhs_ipk' => $this->input->post('mhs_ipk'),
            );
            try{
                $mahasiswa_id = $this->Mahasiswa_model->add_mahasiswa($store);
                $this->session->set_flashdata('success', 'Anda berhasil menambahkan data');
            }
            catch(Exception $eror){
                $this->session->set_flashdata('fail', 'Anda gagal menambahkan data');
            }
            redirect('mhs/index');
        }
        else {
            $data["mMhs"] = true;
            $data["judul"] = "Mahasiswa";
            $data["konten"] = "page/mhs/add";
            $this->load->view("layouts/main2", $data);
        }
    }

    public function edit($NIM) {
        $data['mahasiswa'] = $this->Mahasiswa_model->get_mahasiswa($NIM);//cari data
        $data['list'] = $this->Mahasiswa_model->show_mahasiswa();
        $data['jurusan'] = $this->Jurusan_model->show_jurusan();
        if(isset($data['mahasiswa']['NIM'])){
            if(isset($_POST) && count($_POST) > 0) {   
                $update = array(
                    'NIM' => $this->input->post('NIM'),
					'mhs_nama' => $this->input->post('mhs_nama'),
					'mhs_tpt_lhr' => $this->input->post('mhs_tpt_lhr'),
					'mhs_tgl_lhr' => $this->input->post('mhs_tgl_lhr'),
					'mhs_jurusan' => $this->input->post('mhs_jurusan'),
					'mhs_ipk' => $this->input->post('mhs_ipk'),
                );
                
                try{
                    $this->Mahasiswa_model->update_mahasiswa($NIM,$update); 
                    $this->session->set_flashdata('success', 'Anda berhasil mengedit data');
                }
                catch(Exception $eror){
                    $this->session->set_flashdata('fail', 'Anda gagal mengedit data');
                }           
                redirect('mhs/index');
            }
            else{
                $data["mMhs"] = true;
                $data["judul"] = "Mahasiswa"; 
                $data["konten"] = "page/mhs/edit";
                $this->load->view("layouts/main2", $data);
            }
        }
        else {
            $this->session->set_flashdata('fail', 'Edit Mahasiswa gagal! Ya iyalah datanya gak ada -_-');
            redirect('mhs/index');
        }
    }

    function delete($NIM){
        $mahasiswa = $this->Mahasiswa_model->get_mahasiswa($NIM);
        
        if(isset($mahasiswa['NIM'])){
            try{
                $this->Mahasiswa_model->delete_mahasiswa($NIM);
                $this->session->set_flashdata('success', 'Anda berhasil menhapus data');
            }
            catch(Exception $eror){
                $this->session->set_flashdata('fail', 'Anda gagal menghapus data');
            }
            redirect('mhs/index');
        }
        else {
            $this->session->set_flashdata('fail', 'Hapus Mahasiswa gagal! Ya iyalah datanya gak ada -_-');
            redirect('mhs/index');
        }
    }
}
