<?php
class user_guru extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Mcrud');
        
    }

    public function userguru(){
        $this->template->load('layout_guru','guru/materi');
    }

    public function userguru_ujian(){
        $this->template->load('layout_guru','guru/ujian');
    }

    public function userguru_jwbujian(){
      $data['jawab_ujian']=$this->Mcrud->get_all_data('jawab_ujian')->result();
      $this->template->load('layout_guru','guru/jawaban_ujian',$data);
    }

    public function save(){
         $config['upload_path']     = './user_guru/materi/'; 
         $config['allowed_types']   = 'pdf|pdf'; 
          
         $this->load->library('upload', $config);
          
         if($this->upload->do_upload('upload_materi'))
         { 
             $data_file = $this->upload->data();
             $upload_materi = $this->upload->data(); 

             $data_insert= array(
                 'upload_materi'=>$upload_materi['file_name'] 
                                  );
             $this->Mcrud->insert('materi', $data_insert);  
             $this->session->set_flashdata('success','Data Berhasil Disimpan');
             redirect('user_guru/userguru');
         } else {  
           $this->session->set_flashdata('successhapus','Data Gagal Disimpan');
             redirect('user_guru/userguru');
         }  
       }

       public function ujian(){
         $config['upload_path']     = './user_guru/soalujian/'; 
         $config['allowed_types']   = 'pdf|pdf'; 
          
         $this->load->library('upload', $config);
          
         if($this->upload->do_upload('upload_ujian'))
         { 
             $data_file = $this->upload->data();
             $upload_ujian = $this->upload->data(); 

             $data_insert= array(
                 'upload_ujian'=>$upload_ujian['file_name'] 
                                  );
             $this->Mcrud->insert('ujian', $data_insert);  
             $this->session->set_flashdata('success','Data Berhasil Disimpan');
             redirect('user_guru/userguru');
         } else {  
           $this->session->set_flashdata('successhapus','Data Gagal Disimpan');
             redirect('user_guru/userguru');
         }  
       }

       public function userguru_nilai()
       {
        $data['siswa']=$this->Mcrud->get_all_data('siswa')->result();
        $this->template->load('layout_guru','guru/nilai',$data);
       }


      public function save_nilai(){
        $upload_nilai = $this->input->post('upload_nilai');
        $NIS = $this->input->post('NIS');
        $keterangan = $this->input->post('keterangan');
       
        $dataInsert = array('upload_nilai' => $upload_nilai,
                            'NIS' => $NIS,
                            'keterangan' => $keterangan);

            $this->Mcrud->insert('nilai',$dataInsert);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success">
                                        Data Berhasil Ditambahkan</div>');
            redirect('user_guru/userguru_nilai');
      }

      public function download($jwb_ujian){
        $data = $this->db->get_where('jawab_ujian', ['jwb_ujian'=>$jwb_ujian])->row();
        force_download('user_siswa/jawabanujian/'.$data->jwb_ujian,NULL);
      }

}