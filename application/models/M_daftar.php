<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_daftar extends CI_Model{

	public function listDaftar()
	{
		$query=$this->db->query("SELECT * FROM pendaftaran WHERE status='daftar'");
		return $query->result();
	}

	public function getDaftarWhereKode($kode) {
		return $this->db->get_where('pendaftaran',array('kode'=>$kode));
	}

	public function updateStatus($status, $kode) {
		$this->db->set('status', $status);
		$this->db->where("kode", $kode);
		$this->db->update('pendaftaran');
	}

	//return result digunakan untuk mengembalikan nilai berupa array
	//ps: kalau masukin data ke database gak perlu return result soale nggak ngembaliin apa2 
	public function insert($data)
	{
		$this->db->insert('pendaftaran', $data);
	}
	
	public function update($data, $kode){
		$this->db->set($data);
		$this->db->where("kode", $kode);
		$this->db->update('pendaftaran', $data);
	}

	public function delete($kode){
		$this->db->query("DELETE FROM pendaftaran where kode='$kode'");
	}
}
?>