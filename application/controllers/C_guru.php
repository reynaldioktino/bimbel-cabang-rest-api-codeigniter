<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_guru extends CI_Controller {

    function __construct() {
    	parent::__construct();
    	$this->load->model('M_guru');
    }

    public function index() {
    	
    }

    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'kode'           => $this->input->post('kode'),
                'nama'      =>  $this->input->post('nama'),
                'email'      =>  $this->input->post('email'),
                'no_hp'      =>  $this->input->post('no_hp'),
                'mapel'      =>  $this->input->post('mapel'),
                'id_cabang'      =>  $this->input->post('id_cabang')
            );
            $insert =  $this->M_guru->insert($data);  
            redirect('C_admin/guru');
        }else{
            $this->load->view('guru/create');
        }
    }

    function edit(){
        if(isset($_POST['submit'])){
        	$kode = $this->input->post('kode');
            $data = array(
                'kode'           => $this->input->post('kode'),
                'nama'      =>  $this->input->post('nama'),
                'email'      =>  $this->input->post('email'),
                'no_hp'      =>  $this->input->post('no_hp'),
                'mapel'      =>  $this->input->post('mapel'),
                'id_cabang'      =>  $this->input->post('id_cabang')
            );
            $update =  $this->M_guru->update($data, $kode);  
            redirect('C_admin/guru');
        }else{
            $kode = $this->uri->segment(3);
            $data['guru'] = $this->M_guru->getGuruWhereKode($kode)->result();
            $this->load->view('guru/edit',$data);
        }
    }

    function delete($id) {
    	$delete = $this->M_guru->delete($id);
    	redirect('C_admin/guru');
    }
}
?>