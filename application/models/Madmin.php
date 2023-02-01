<?php  
 
class Madmin extends CI_Model { 

    public function get_all_data($table){
		return $this->db->get($table);
	
	}

    public function get_siswa(){ 
        $q = $this->db->query("select siswa.NIS, siswa.email, siswa.password, siswa.nama_lengkap, siswa.gambar, siswa.level, kelas.nama_kelas
        from siswa 
        join kelas on siswa.id_kelas = kelas.id_kelas 
        group by siswa.NIS, siswa.email, siswa.password, siswa.nama_lengkap, siswa.gambar, siswa.level, kelas.nama_kelas"); 
        return $q;
    }

    public function get_kelas(){
        $q = $this->db->query("select siswa.NIS, siswa.email, siswa.password, siswa.nama_lengkap, siswa.gambar, siswa.level, kelas.nama_kelas
        from siswa
        join kelas on siswa.id_kelas = kelas.id_kelas
        group by siswa.NIS, siswa.email, siswa.password, siswa.nama_lengkap, siswa.gambar, siswa.level, kelas.nama_kelas");
        return $q;
    }

    public function get_mapel(){
        $q = $this->db->query(" SELECT guru.NIG, guru.email, guru.password, guru.nama_lengkap, guru.gambar,
        guru.id_pelajaran, guru.level, pelajaran.nama_pelajaran FROM guru JOIN pelajaran
        ON guru.id_pelajaran = pelajaran.id_pelajaran group by guru.NIG, guru.email, guru.password, 
        guru.nama_lengkap, guru.gambar, guru.id_pelajaran, guru.level, pelajaran.nama_pelajaran");
        return $q;
    }
}