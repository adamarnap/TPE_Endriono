<?php
    class M_login extends CI_Model {
        function cekuserdaftar($email)
        {
            $query = $this->db->query("SELECT * FROM login  WHERE email = '$email' ");

            if ($query->num_rows()==1)
            {
                return $query->result();
            }else
            {
                return false;
            }
        }

        function ceklogin($email,$password)
        {
            $query = $this->db->query("SELECT * FROM login  WHERE email = '$email' and password = '$password' ");

            if ($query->num_rows()==1)
            {
                return $query->result();
            }else
            {
                return false;
            }
        }

        function cek_login($e, $p, $lvl)
        {
            $q = $this->db->get_where('login', array('email' => $e, 'password' => $p, 'level' => $lvl));
            return $q;
        }
        function cek_login_guru($e, $p, $lvl)
        {
            $q = $this->db->get_where('guru', array('email' => $e, 'password' => $p, 'level' => $lvl));
            return $q;
        }

        function cek_login_siswa($e, $p, $lvl)
        {
            $q = $this->db->get_where('siswa', array('email' => $e, 'password' => $p, 'level' => $lvl));
            return $q;
        }

        function get_guru()
        {
            $q = $this->db->query("SELECT * FROM login WHERE level='guru' ");
            return $q;
        }

        function get_siswa()
        {
            $q = $this->db->query("SELECT * FROM login WHERE level='siswa' ");
            return $q;
        }

        function get_level()
        {
            $q = $this->db->query("SELECT level FROM guru");
            return $q;
        }
    }