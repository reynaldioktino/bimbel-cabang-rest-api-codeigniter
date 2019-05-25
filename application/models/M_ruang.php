<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ruang extends CI_Model{

	public function listRuang()
	{
		$query=$this->db->query("SELECT * FROM ruang");
		return $query->result();
	}

	public function getRuangWhereKode($kode) {
		return $this->db->get_where('ruang',array('kode'=>$kode));
	}

	//return result digunakan untuk mengembalikan nilai berupa array
	//ps: kalau masukin data ke database gak perlu return result soale nggak ngembaliin apa2 
	public function insert($data)
	{
		$this->db->insert('ruang', $data);
	}
	
	public function update($data, $kode){
		$this->db->set($data);
		$this->db->where("kode", $kode);
		$this->db->update('ruang', $data);
	}

	public function delete($kode){
		$this->db->query("DELETE FROM ruang where kode='$kode'");
	}
}
?>