<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jadwal extends CI_Model{

	public function listJadwal()
	{
		$query=$this->db->query("SELECT * FROM jadwal");
		return $query->result();
	}

	public function getJadwalWhereKode($kode) {
		return $this->db->get_where('jadwal',array('kode'=>$kode));
	}

	//return result digunakan untuk mengembalikan nilai berupa array
	//ps: kalau masukin data ke database gak perlu return result soale nggak ngembaliin apa2 
	public function insert($data)
	{
		$this->db->insert('jadwal', $data);
	}
	
	public function update($data, $kode){
		$this->db->set($data);
		$this->db->where("kode", $kode);
		$this->db->update('jadwal', $data);
	}

	public function delete($kode){
		$this->db->query("DELETE FROM jadwal where kode='$kode'");
	}
}
?>