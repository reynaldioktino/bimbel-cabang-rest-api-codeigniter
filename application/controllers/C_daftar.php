<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_daftar extends CI_Controller {

    function __construct() {
    	parent::__construct();
    	$this->load->model('M_daftar');
        $this->load->model('M_program');
        $this->load->model('M_kelas');
        $this->load->model('M_siswa');
    }

    public function index() {
    	
    }

    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'kode'           => $this->input->post('kode'),
                'nama'      =>  $this->input->post('nama'),
                'alamat'      =>  $this->input->post('alamat'),
                'email'      =>  $this->input->post('email'),
                'no_hp'      =>  $this->input->post('no_hp'),
                'sekolah'      =>  $this->input->post('sekolah'),
                'nama_ortu'=>  $this->input->post('nama_ortu'),
                'status'    => "daftar",
                'no_hp_ortu'      =>  $this->input->post('no_hp_ortu'),
                'id_program'      =>  $this->input->post('id_program')
            );
            $insert =  $this->M_daftar->insert($data);  
            redirect('C_admin/daftar');
        }else{
            $data['program'] = $this->M_program->listProgram();
            $this->load->view('daftar/create', $data);
        }
    }

    function edit(){
        if(isset($_POST['submit'])){
        	$kode = $this->input->post('kode');
            $data = array(
                'kode'           => $this->input->post('kode'),
                'nama'      =>  $this->input->post('nama'),
                'alamat'      =>  $this->input->post('alamat'),
                'email'      =>  $this->input->post('email'),
                'no_hp'      =>  $this->input->post('no_hp'),
                'sekolah'      =>  $this->input->post('sekolah'),
                'nama_ortu'=>  $this->input->post('nama_ortu'),
                'no_hp_ortu'      =>  $this->input->post('no_hp_ortu'),
                'id_program'      =>  $this->input->post('id_program')
            );
            $update =  $this->M_daftar->update($data, $kode);  
            redirect('C_admin/daftar');
        }else{
            $kode = $this->uri->segment(3);
            $data['daftar'] = $this->M_daftar->getDaftarWhereKode($kode)->result();
            $data['program'] = $this->M_program->listProgram();
            $this->load->view('daftar/edit',$data);
        }
    }

    function delete($id) {
    	$delete = $this->M_daftar->delete($id);
    	redirect('C_admin/daftar');
    }

    function pilih_kelas() {
        if(isset($_POST['submit'])){
            $siswa = array(
                'kode'           => $this->input->post(''),
                'id_daftar' => $this->input->post('id_daftar'),
                'nama'      =>  $this->input->post('nama'),
                'email'      =>  $this->input->post('email'),
                'no_hp'      =>  $this->input->post('no_hp'),
                'alamat'      =>  $this->input->post('alamat'),
                'id_cabang'      =>  $this->input->post('id_cabang'),
                'id_kelas'      =>  $this->input->post('id_kelas')
            );
            $kode = $this->input->post('id_daftar');
            $insert =  $this->M_siswa->insert($siswa);
            $status = "siswa";
            $this->M_daftar->updateStatus($status, $kode);
            redirect('C_admin/daftar');
        }else{
            $kode = $this->uri->segment(3);
            $id_program = $this->uri->segment(4);
            $data['daftar'] = $this->M_daftar->getDaftarWhereKode($kode)->result();
            $data['kelas'] = $this->M_kelas->listKelasWhere($id_program);
            $this->load->view('daftar/pilih_kelas',$data);
        }
    }
}
?>