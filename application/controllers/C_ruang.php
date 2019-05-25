<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_ruang extends CI_Controller {

    function __construct() {
    	parent::__construct();
        $this->load->model('M_ruang');
    }

    public function index() {
    	
    }

    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'kode'           => $this->input->post('kode'),
                'nama'      =>  $this->input->post('nama')
            );
            $insert =  $this->M_ruang->insert($data);  
            redirect('C_admin/ruang');
        }else{
            $this->load->view('ruang/create');
        }
    }

    function edit(){
        if(isset($_POST['submit'])){
        	$kode = $this->input->post('kode');
            $data = array(
                'kode'           => $this->input->post('kode'),
                'nama'      =>  $this->input->post('nama')
            );
            $update =  $this->M_ruang->update($data, $kode);  
            redirect('C_admin/ruang');
        }else{
            $kode = $this->uri->segment(3);
            $data['ruang'] = $this->M_ruang->getRuangWhereKode($kode)->result();
            $this->load->view('ruang/edit',$data);
        }
    }

    function delete($id) {
    	$delete = $this->M_ruang->delete($id);
    	redirect('C_admin/ruang');
    }
}
?>