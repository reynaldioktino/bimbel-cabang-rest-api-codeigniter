<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_jadwal extends CI_Controller {

    function __construct() {
    	parent::__construct();
    	$this->load->model('M_jadwal');
        $this->load->model('M_kelas');
        $this->load->model('M_ruang');
        $this->load->model('M_guru');
    }

    public function index() {
    	
    }

    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'kode'           => $this->input->post('kode'),
                'id_kelas'      =>  $this->input->post('id_kelas'),
                'id_ruang'      =>  $this->input->post('id_ruang'),
                'id_guru'      =>  $this->input->post('id_guru'),
                'hari'      =>  $this->input->post('hari'),
                'jam'      =>  $this->input->post('jam')
            );
            $insert =  $this->M_jadwal->insert($data);  
            redirect('C_admin/jadwal');
        }else{
            $data['kelas'] = $this->M_kelas->listKelas();
            $data['ruang'] = $this->M_ruang->listRuang();
            $data['guru'] = $this->M_guru->listGuru();
            $this->load->view('jadwal/create', $data);
        }
    }

    function edit(){
        if(isset($_POST['submit'])){
        	$kode = $this->input->post('kode');
            $data = array(
                'kode'           => $this->input->post('kode'),
                'id_kelas'      =>  $this->input->post('id_kelas'),
                'id_ruang'      =>  $this->input->post('id_ruang'),
                'id_guru'      =>  $this->input->post('id_guru'),
                'hari'      =>  $this->input->post('hari'),
                'jam'      =>  $this->input->post('jam')
            );
            $update =  $this->M_jadwal->update($data, $kode);  
            redirect('C_admin/jadwal');
        }else{
            $kode = $this->uri->segment(3);
            $data['jadwal'] = $this->M_jadwal->getJadwalWhereKode($kode)->result();
            $data['kelas'] = $this->M_kelas->listKelas();
            $data['ruang'] = $this->M_ruang->listRuang();
            $data['guru'] = $this->M_guru->listGuru();
            $this->load->view('jadwal/edit',$data);
        }
    }

    function delete($id) {
    	$delete = $this->M_jadwal->delete($id);
    	redirect('C_admin/jadwal');
    }
}
?>