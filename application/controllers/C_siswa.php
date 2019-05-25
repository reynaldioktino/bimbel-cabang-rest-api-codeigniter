<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_siswa extends CI_Controller {

    function __construct() {
    	parent::__construct();
    	$this->load->model('M_siswa');
        $this->load->model('M_kelas');
        $this->load->model('M_daftar');
    }

    public function index() {
    	
    }

    function create(){
        // if(isset($_POST['submit'])){
        //     $data = array(
        //         'kode'           => $this->input->post('kode'),
        //         'id_kelas'      =>  $this->input->post('id_kelas'),
        //         'id_ruang'      =>  $this->input->post('id_ruang'),
        //         'id_guru'      =>  $this->input->post('id_guru'),
        //         'hari'      =>  $this->input->post('hari'),
        //         'jam'      =>  $this->input->post('jam')
        //     );
        //     $insert =  $this->M_siswa->insert($data);  
        //     redirect('C_admin/siswa');
        // }else{
        //     $data['kelas'] = $this->M_kelas->listKelas();
        //     $data['ruang'] = $this->M_ruang->listRuang();
        //     $data['guru'] = $this->M_guru->listGuru();
        //     $this->load->view('siswa/create', $data);
        // }
    }

    function edit(){
        if(isset($_POST['submit'])){
        	$kode = $this->input->post('kode');
            $data = array(
                'nama'           => $this->input->post('nama'),
                'email'      =>  $this->input->post('email'),
                'no_hp'      =>  $this->input->post('no_hp'),
                'alamat'      =>  $this->input->post('alamat')
            );
            $update =  $this->M_siswa->update($data, $kode);  
            redirect('C_admin/siswa');
        }else{
            $kode = $this->uri->segment(3);
            $data['siswa'] = $this->M_siswa->getSiswaWhereKode($kode)->result();
            $this->load->view('siswa/edit',$data);
        }
    }

    function delete($id, $id_daftar) {
    	$delete = $this->M_siswa->delete($id);
        $status = "daftar";
        $this->M_daftar->updateStatus($status, $id_daftar);
    	redirect('C_admin/siswa');
    }
}
?>