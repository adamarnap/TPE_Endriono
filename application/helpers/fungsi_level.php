<?php 
 
 function check_admin() { 
     $ci =& get_instance(); 
     $ci->load->models('Mlogin'); 
     if($ci->Mlogin->cek_login()->level !=1) { 
         redirect('dashboard');
     }
 }