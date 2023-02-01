<?php
    class login extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model('M_login');
            $this->load->library('session');
        }

        public function index()
        {
            $this->load->view('login');
        }

        function proses_login()
        {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $cekuserdaftar = $this->M_login->cekuserdaftar($email);

            if ($cekuserdaftar){

            $ceklogin = $this->M_login->ceklogin($email,$password);

            if ($ceklogin){
                foreach ($ceklogin as $row)

                if ($row->status == "AKTIF"){
                    $this->session->set_userdata('email', $row->email);
                    $this->session->set_userdata('nama', $row->nama);
                    $this->session->set_userdata('level', $row->level);

                    if($this->session->userdata('level')=="admin"||"guru"){
                        redirect ('admin/dashboard');
                    }
                    elseif($this->session->userdata('level')=="guru"){
                        redirect ('Guru');
                    }
                    elseif($this->session->userdata('level')=="siswa"){
                        redirect ('Siswa');
                    }                    
                    else{
                        echo"<script>alert('Maaf anda tidak memiliki hak akses.');</script>";
                        redirect ('login','refresh');
                    }

                }else{
                    echo"<script>alert('Maaf akun anda belum aktif.');</script>";
                    redirect('login','refresh');
                }
                
            }else{
                echo"<script>alert('Maaf email atau password anda salah.');</script>";
                    redirect('login','refresh');
                }
            }else{
            echo"<script>alert('Maaf email anda belum terdaftar.');</script>";
                    redirect('login','refresh');
        }
    }
        public function logout(){
            $this->session->sess_destroy();
            redirect('login');
        }
    
}