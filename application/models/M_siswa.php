<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model{

	public function listSiswa()
	{
		$query=$this->db->query("SELECT * FROM siswa");
		return $query->result();
	}

	public function getSiswaWhereKode($kode) {
		return $this->db->get_where('siswa',array('kode'=>$kode));
	}

	//return result digunakan untuk mengembalikan nilai berupa array
	//ps: kalau masukin data ke database gak perlu return result soale nggak ngembaliin apa2 
	public function insert($data)
	{
		$this->db->insert('siswa', $data);
	}
	
	public function update($data, $kode){
		$this->db->set($data);
		$this->db->where("kode", $kode);
		$this->db->update('siswa', $data);
	}

	public function delete($kode){
		$this->db->query("DELETE FROM siswa where kode='$kode'");
	}
}
?>