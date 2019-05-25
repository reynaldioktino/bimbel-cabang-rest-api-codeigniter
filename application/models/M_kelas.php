<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelas extends CI_Model{

	public function listKelas()
	{
		$query=$this->db->query("SELECT * FROM kelas");
		return $query->result();
	}

	public function listKelasWhere($id_program)
	{
		$query=$this->db->query("SELECT * FROM kelas WHERE id_program='$id_program'");
		return $query->result();
	}

	public function getKelasWhereKode($kode) {
		return $this->db->get_where('kelas',array('kode'=>$kode));
	}

	//return result digunakan untuk mengembalikan nilai berupa array
	//ps: kalau masukin data ke database gak perlu return result soale nggak ngembaliin apa2 
	public function insert($data)
	{
		$this->db->insert('kelas', $data);
	}
	
	public function update($data, $kode){
		$this->db->set($data);
		$this->db->where("kode", $kode);
		$this->db->update('kelas', $data);
	}

	public function delete($kode){
		$this->db->query("DELETE FROM kelas where kode='$kode'");
	}
}
?>