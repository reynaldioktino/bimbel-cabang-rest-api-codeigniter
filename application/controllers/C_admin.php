<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

    function __construct() {
    	parent::__construct();
        $this->load->model('M_daftar');
        $this->load->model('M_ruang');
        $this->load->model('M_kelas');
        $this->load->model('M_siswa');
        $this->load->model('M_guru');
        $this->load->model('M_jadwal');
    }

    public function index() {
    	$this->load->view('dashboard');
    }

    public function daftar() {
        $data['daftar']=$this->M_daftar->listDaftar();
        $this->load->view('daftar/list', $data);
    }
    public function ruang(){
        $data['ruang']=$this->M_ruang->listRuang();
        $this->load->view('ruang/list', $data);          
    }
    public function kelas(){
        $data['kelas']=$this->M_kelas->listKelas();
        $this->load->view('kelas/list', $data);          
    }
    public function siswa(){
        $data['siswa']=$this->M_siswa->listSiswa();
        $this->load->view('siswa/list', $data);          
    }
    public function guru(){
        $data['guru']=$this->M_guru->listGuru();
        $this->load->view('guru/list', $data);          
    }
    public function jadwal(){
        $data['jadwal']=$this->M_jadwal->listJadwal();
        $this->load->view('jadwal/list', $data);          
    }
    public function transaksi(){
        $data['transaksi']=$this->M_transaksi->listTransaksi();
        $this->load->view('transaksi/list', $data);          
    }
}
?>