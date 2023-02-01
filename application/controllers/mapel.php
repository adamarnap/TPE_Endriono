<?php
class mapel extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Mcrud');
    }

    public function mapel(){
        $data['pelajaran']=$this->Mcrud->get_all_data('pelajaran')->result();
        $this->template->load('layout_admin','admin/mapel',$data);
    }

    public function add(){
        $data['pelajaran']=$this->Mcrud->get_all_data('pelajaran')->result();
        $this->template->load('layout_admin','admin/form_add_mapel', $data);
    }

    public function save(){
        $id_pelajaran = $this->input->post('id_pelajaran');
        $nama_pelajaran = $this->input->post('nama_pelajaran');
        $dataInsert = array(
                                'id_pelajaran' => $id_pelajaran,
                                'nama_pelajaran' => $nama_pelajaran);
            $this->Mcrud->insert('pelajaran',$dataInsert);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success">
                                        Data Berhasil Ditambahkan</div>');
            redirect('mapel/mapel');
    }

    public function getid($id_pelajaran){
        $where = array('id_pelajaran' => $id_pelajaran);
        $data['pelajaran']=$this->Mcrud->get_all_data('pelajaran')->result();
        $data['pelajaran'] = $this->Mcrud->get_by_id($where, 'pelajaran')->result();
        $this->template->load('layout_admin','admin/form_edit_mapel', $data);
    }

    public function edit(){
        $data['pelajaran']=$this->Mcrud->get_all_data('pelajaran')->result();
        $id_pelajaran = $this->input->post('id_pelajaran');
        $nama_pelajaran = $this->input->post('nama_pelajaran');
        $data = array(
                                'id_pelajaran' => $id_pelajaran,
                                'nama_pelajaran' => $nama_pelajaran);

        $where = array('id_pelajaran' => $id_pelajaran);
        $this->Mcrud->update($where, $data, 'pelajaran');
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning">
                                    Data Kategori Berhasil Diedit</div>');
        redirect('mapel/mapel');
    }

    public function delete($id_pelajaran){
        $data = array('id_pelajaran' => $id_pelajaran);
        $this->Mcrud->delete_data($data, 'pelajaran');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger">
                                    Data Kategori Berhasil Dihapus</div>');
        redirect('mapel/mapel');
    }
}