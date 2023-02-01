<?php
class kelas extends CI_Controller{

    function __construct(){
        parent::__construct();
    }

    public function kelas10(){
        $this->template->load('layout_admin','admin/kelas10');
    }

    public function kelas11(){
        $this->template->load('layout_admin','admin/kelas11');
    }

    public function kelas12(){
        $this->template->load('layout_admin','admin/kelas12');
    }

    public function save(){
        $nama_kelas = $this->input->post('nama_kelas');
        $dataInsert = array('nama_kelas' => $nama_kelas);
        $this->Mcrud->insert('kelas',$dataInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success">
                                    Data Kategori Berhasil Ditambahkan</div>');
        redirect('kelas/kelas'); 
    }
    
}