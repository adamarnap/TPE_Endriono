<?php 

class Mcrud extends CI_Model{

	public function get_all_data($table){
		return $this->db->get($table);
	
	}
 
	public function insert($tabel, $data){
		$this->db->insert($tabel, $data);
	}
	public function insert_materi($tabel){
		return $this->db->insert_materi('materi',$tabel);
	}

	public function get_by_id($id,$tabel){
		return $this->db->get_where($tabel, $id);
	}

	public function update($where,$data,$tabel){
		$this->db->where($where);
		$this->db->update($tabel, $data);
	}

	public function delete_data($data, $tabel){
		$this->db->where($data);
		$this->db->delete($tabel);
	}
}