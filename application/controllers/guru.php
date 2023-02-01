<?php
class guru extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Mcrud');
        $this->load->model('Madmin');
    }

    public function guru(){
        $data['guru']=$this->Madmin->get_mapel()->result();
        $this->template->load('layout_admin','admin/profile_guru',$data);
    }

    public function add(){
        $data['pelajaran']=$this->Mcrud->get_all_data('pelajaran')->result();
        $this->template->load('layout_admin','admin/form_add_guru', $data);
    }

    public function save(){
        $config['upload_path']  ='./gambarguru/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|PNG';
        $config['max_size']     = 10000;
        $config['max_width']    = 10000;
        $config['max_height']   = 10000;
        
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('gambar'))
        {
            echo "gagal upload";
        }else
        {
            $gambar=$this->upload->data();
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $NIG = $this->input->post('NIG');
            $nama_lengkap = $this->input->post('nama_lengkap');
            $id_pelajaran = $this->input->post('id_pelajaran');
            $dataInsert = array('email' => $email,
                                'password' => $password,
                                'NIG' => $NIG,
                                'nama_lengkap' => $nama_lengkap,
                                'id_pelajaran' => $id_pelajaran,
                                'gambar' => $gambar['file_name']);
                                
            $this->Mcrud->insert('guru',$dataInsert);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success">
                                        Data Berhasil Ditambahkan</div>');
            redirect('guru/guru');
        }
        
         
    }

    public function getid($NIG){
        $where = array('NIG' => $NIG);
        $data['guru'] = $this->Mcrud->get_by_id($where, 'guru')->result();
        $this->template->load('layout_admin','admin/form_edit_guru', $data);
    }

    public function edit(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $NIG = $this->input->post('NIG');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $mata_pelajaran = $this->input->post('mata_pelajaran');
        $id_kelas = $this->input->post('id_kelas');

        $data = array('email' => $email,
                            'password' => $password,
                            'NIG' => $NIG,
                            'nama_lengkap' => $nama_lengkap,
                            'mata_pelajaran' => $mata_pelajaran,
                            'id_kelas' => $id_kelas);




        $where = array('NIG' => $NIG);
        $this->Mcrud->update($where, $data, 'guru');
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning">
                                    Data Kategori Berhasil Diedit</div>');
        redirect('guru/guru');
    }

    public function delete($NIG){
        $data = array('NIG' => $NIG);
        $this->Mcrud->delete_data($data, 'guru');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger">
                                    Data Kategori Berhasil Dihapus</div>');
        redirect('guru/guru');
    }
}