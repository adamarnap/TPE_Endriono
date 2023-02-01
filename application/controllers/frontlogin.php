<?php
    class frontlogin extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->library('session');
        }

        public function aksi_login()
        {
            $this->load->model('M_login');

            $e = $this->input->post('email');
            $p = $this->input->post('password');
            $lvl = $this->input->post('level');

            $cek = $this->M_login->cek_login_guru($e,$p,$lvl)->num_rows();
            $ceks = $this->M_login->cek_login_siswa($e,$p,$lvl)->num_rows();
       

            if ($cek == TRUE && $lvl == 'Guru'){
                $data_session = array(
                    'email' => $e,
                    'status' => 'login'
                );

                $this->session->set_userdata($data_session);
                redirect('user/dashboard_guru');

            }elseif ($ceks == TRUE && $lvl == 'Siswa'){
                $data_session = array(
                    'email' => $e,
                    'status' => 'login'
                );

                $this->session->set_userdata($data_session);
                redirect('user/dashboard_siswa');
            }
        }

        public function logout(){
            $this->session->sess_destroy();
            redirect('user');
        }
}