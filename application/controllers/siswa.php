<?php
class siswa extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Mcrud');
        $this->load->model('Madmin');
    }

    public function siswa(){ 
        
        $data['siswa']=$this->Madmin->get_siswa('')->result();
        $this->template->load('layout_admin','admin/profile_siswa',$data);
    }

    public function add(){
        $data['kelas']=$this->Mcrud->get_all_data('kelas')->result();
        $this->template->load('layout_admin','admin/form_add_siswa', $data);
    }

    public function save()
    {
        $config['upload_path']  ='./gambarsiswa/';
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
            $NIS = $this->input->post('NIS');
            $nama_lengkap = $this->input->post('nama_lengkap');
            $id_kelas = $this->input->post('id_kelas');
            $dataInsert = array('email' => $email,
                                'password' => $password,
                                'NIS' => $NIS,
                                'nama_lengkap' => $nama_lengkap,
                                'id_kelas' => $id_kelas,
                                'gambar' => $gambar['file_name']);
            $this->Mcrud->insert('siswa',$dataInsert);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success">
                                        Data Berhasil Ditambahkan</div>');
            redirect('siswa/siswa'); 
        }
    }

    public function getid($NIS){
      
        $data['kelas']=$this->Mcrud->get_all_data('kelas')->result();
        $where = array('NIS' => $NIS);
        $data['siswa'] = $this->Mcrud->get_by_id($where, 'siswa')->row_object();
        $this->template->load('layout_admin','admin/form_edit_siswa', $data);
    }

    public function edit(){
        $data['siswa']=$this->Mcrud->get_all_data('siswa')->result();
        $data['kelas']=$this->Mcrud->get_all_data('kelas')->result();
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $NIS = $this->input->post('NIS');
        $nama_lengkap = $this->input->post('nama_lengkap');
      
        $id_kelas = $this->input->post('id_kelas');

        $data = array('email' => $email,
                            'password' => $password,
                            'NIS' => $NIS,
                            'nama_lengkap' => $nama_lengkap,
                            'id_kelas' => $id_kelas);




        $where = array('NIS' => $NIS);
        $this->Mcrud->update($where, $data, 'siswa');
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning">
                                    Data Kategori Berhasil Diedit</div>');
        redirect('siswa/siswa');
    }

    public function delete($NIS){
        $data = array('NIS' => $NIS);
        $this->Mcrud->delete_data($data, 'siswa');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger">
                                    Data Kategori Berhasil Dihapus</div>');
        redirect('siswa/siswa');
    }
}