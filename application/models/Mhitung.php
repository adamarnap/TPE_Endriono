<?php  
 
class Mhitung extends CI_Model { 

     
    public function get_total_userG(){   
        $q = $this->db->query("SELECT count(NIG) as user FROM guru"); 
        return $q->row()->user;
    } 

    public function get_total_userS(){   
        $q = $this->db->query("SELECT count(NIS) as user FROM siswa"); 
        return $q->row()->user;
    } 
}