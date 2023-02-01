<?php 
	class user extends CI_controller{  

		function __construct(){
			parent::__construct();
			$this->load->model('M_login');
		}

		public function index(){ 
			$data['guru'] = $this->M_login->get_level()->result();
			$this->load->view('front_login', $data);
 	 	} 

		public function dashboard_guru(){
			if (empty($this->session->userdata('email'))){
				redirect('user');
			}
				$this->template->load('layout_guru','dashboard_guru');
		}

		public function dashboard_siswa(){
			if (empty($this->session->userdata('email'))){
				redirect('user');
			}
				$this->template->load('layout_siswa','dashboard_siswa');
		}
	}