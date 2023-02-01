<?php 
	class admin extends CI_controller{ 
		
		function __construct(){
			parent::__construct();
			$this->load->model('Mhitung');
			$this->load->model('Mcrud');
		}

 		public function index(){ 
 			$this->load->view('login');
 	 } 

	  	public function dashboard(){
		if (empty($this->session->userdata('email'))){
			redirect('admin');
		}
		
			
		$data['item1'] = $this->Mhitung->get_total_userG();
		$data['item2'] = $this->Mhitung->get_total_userS();

			$this->template->load('layout_admin','dashboard',$data);
	}

	public function materi(){
		$data['materi']=$this->Mcrud->get_all_data('materi')->result();
        $this->template->load('layout_admin','admin/materi',$data);
    }

	public function soal_ujian(){
		$data['ujian']=$this->Mcrud->get_all_data('ujian')->result();
        $this->template->load('layout_admin','admin/soal_ujian',$data);
    }


	public function admin_nilai(){
		$data['nilai']=$this->Mcrud->get_all_data('nilai')->result();
		$this->template->load('layout_admin','admin/nilai',$data);
	}

	public function admin_jwbujian(){
		$data['jawab_ujian']=$this->Mcrud->get_all_data('jawab_ujian')->result();
		$this->template->load('layout_admin','admin/jawaban_ujian',$data);
	}

	public function download($jwb_ujian){
        $data = $this->db->get_where('jawab_ujian', ['jwb_ujian'=>$jwb_ujian])->row();
        force_download('user_siswa/jawabanujian/'.$data->jwb_ujian,NULL);
      }

}