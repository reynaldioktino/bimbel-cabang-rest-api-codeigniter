<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kelas extends CI_Controller {

    function __construct() {
    	parent::__construct();
    	$this->load->model('M_kelas');
        $this->load->model('M_program');
    }

    public function index() {
    	
    }

    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'kode'           => $this->input->post('kode'),
                'id_program'      =>  $this->input->post('id_program'),
                'nama'      =>  $this->input->post('nama'),
                'kuota'      =>  $this->input->post('kuota')
            );
            $insert =  $this->M_kelas->insert($data);  
            redirect('C_admin/kelas');
        }else{
            $data['program'] = $this->M_program->listProgram();
            $this->load->view('kelas/create', $data);
        }
    }

    function edit(){
        if(isset($_POST['submit'])){
        	$kode = $this->input->post('kode');
            $data = array(
                'kode'           => $this->input->post('kode'),
                'id_program'      =>  $this->input->post('id_program'),
                'nama'      =>  $this->input->post('nama'),
                'kuota'      =>  $this->input->post('kuota')
            );
            $update =  $this->M_kelas->update($data, $kode);  
            redirect('C_admin/kelas');
        }else{
            $kode = $this->uri->segment(3);
            $data['kelas'] = $this->M_kelas->getKelasWhereKode($kode)->result();
            $data['program'] = $this->M_program->listProgram();
            $this->load->view('kelas/edit',$data);
        }
    }

    function delete($id) {
    	$delete = $this->M_kelas->delete($id);
    	redirect('C_admin/kelas');
    }


}
?>