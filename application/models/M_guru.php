<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_guru extends CI_Model{

	public function listGuru()
	{
		$query=$this->db->query("SELECT * FROM guru");
		return $query->result();
	}

	public function getGuruWhereKode($kode) {
		return $this->db->get_where('guru',array('kode'=>$kode));
	}

	//return result digunakan untuk mengembalikan nilai berupa array
	//ps: kalau masukin data ke database gak perlu return result soale nggak ngembaliin apa2 
	public function insert($data)
	{
		$this->db->insert('guru', $data);
	}
	
	public function update($data, $kode){
		$this->db->set($data);
		$this->db->where("kode", $kode);
		$this->db->update('guru', $data);
	}

	public function delete($kode){
		$this->db->query("DELETE FROM guru where kode='$kode'");
	}
}
?>