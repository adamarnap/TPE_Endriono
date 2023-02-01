<?php
class user_siswa extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Mcrud');
        
    }

    public function usersiswa_ujian(){
        $this->template->load('layout_siswa','siswa/ujian');
    }

    public function jawab_ujian(){
         $config['upload_path']     = './user_siswa/jawabanujian/'; 
         $config['allowed_types']   = 'pdf|pdf'; 
          
         $this->load->library('upload', $config);
          
         if($this->upload->do_upload('jwb_ujian'))
         { 
             $data_file = $this->upload->data();
             $jwb_ujian = $this->upload->data(); 

             $data_insert= array(
                 'jwb_ujian'=>$jwb_ujian['file_name'] 
                                  );
             $this->Mcrud->insert('jawab_ujian', $data_insert);  
             $this->session->set_flashdata('success','Data Berhasil Disimpan');
             redirect('user_siswa/usersiswa_ujian');
         } else {  
           $this->session->set_flashdata('successhapus','Data Gagal Disimpan');
             redirect('user_siswa/usersiswa_ujian');
         }  
       }

       public function materi(){
		$data['materi']=$this->Mcrud->get_all_data('materi')->result();
        $this->template->load('layout_siswa','siswa/materi',$data);
        }

        public function download($upload_materi){
            $data = $this->db->get_where('materi', ['upload_materi'=>$upload_materi])->row();
            force_download('user_guru/materi/'.$data->upload_materi,NULL);
        }

        public function ujian(){
            $data['ujian']=$this->Mcrud->get_all_data('ujian')->result();
            $this->template->load('layout_siswa','siswa/download_ujian',$data);
            }

        public function download_ujian($upload_ujian){
            $data = $this->db->get_where('ujian', ['upload_ujian'=>$upload_ujian])->row();
            force_download('user_guru/soalujian/'.$data->upload_ujian,NULL);
        }

        public function usersiswa_nilai(){
            $data['nilai']=$this->Mcrud->get_all_data('nilai')->result();
            $this->template->load('layout_siswa','siswa/nilai',$data);
        }

}