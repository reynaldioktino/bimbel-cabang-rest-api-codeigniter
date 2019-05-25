<?php
Class C_program_client extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://192.168.43.39:8080/bimbel_pusat/index.php";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('M_program');
    }
    
    // menampilkan data kontak
    function index(){
        $data['program'] = json_decode($this->curl->simple_get($this->API.'/C_program_server'));
        $this->load->view('program_client/list',$data);
    }

    function daftar() {
        if(isset($_POST['submit'])){
            $data = array(
                'kode'           => $this->input->post('kode'),
                'nama'      =>  $this->input->post('nama'),
                'tingkat'      =>  $this->input->post('tingkat'),
                'keterangan'      =>  $this->input->post('keterangan'),
                'harga'      =>  $this->input->post('harga')
            );

            $insert = $this->M_program->insert($data); 
            
            redirect('C_program_client');
        }else{
            $params = array('kode'=>  $this->uri->segment(3));
            $data['program'] = json_decode($this->curl->simple_get($this->API.'/C_program_server',$params));
            $this->load->view('program_client/daftar',$data);
        }
    }

}