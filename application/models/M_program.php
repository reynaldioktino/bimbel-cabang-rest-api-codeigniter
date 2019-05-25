<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_program extends CI_Model{

	public function listProgram()
	{
		$query=$this->db->query("SELECT * FROM program");
		return $query->result();
	}

	public function getProgramWhereKode($kode) {
		return $this->db->get_where('program',array('kode'=>$kode));
	}

	//return result digunakan untuk mengembalikan nilai berupa array
	//ps: kalau masukin data ke database gak perlu return result soale nggak ngembaliin apa2 
	public function insert($data)
	{
		$this->db->insert('program', $data);
	}
	
	public function update($data, $kode){
		$this->db->set($data);
		$this->db->where("kode", $kode);
		$this->db->update('program', $data);
	}

	public function delete($kode){
		$this->db->query("DELETE FROM program where kode='$kode'");
	}
}
?>