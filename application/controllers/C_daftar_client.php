<?php
Class C_daftar_client extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://192.168.43.53/bimbel_pusat/index.php";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('M_daftar');
    }
    
    // menampilkan data kontak
    function index(){
        $data['daftar'] = json_decode($this->curl->simple_get($this->API.'/C_daftar_server'));
        $this->load->view('daftar_client/list',$data);
    }
    
    // insert data kontak
    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'kode'           => $this->input->post(''),
                'nama'      =>  $this->input->post('nama'),
                'alamat'      =>  $this->input->post('alamat'),
                'email'      =>  $this->input->post('email'),
                'no_hp'      =>  $this->input->post('no_hp'),
                'sekolah'      =>  $this->input->post('sekolah'),
                'nama_ortu'=>  $this->input->post('nama_ortu'),
                'no_hp_ortu'      =>  $this->input->post('no_hp_ortu'),
                'id_program'      =>  $this->input->post('id_program'),
                'id_cabang'      =>  $this->input->post('id_cabang')
                );
            $insert =  $this->curl->simple_post($this->API.'/C_daftar_server', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('C_daftar_client');
        }else{
            $data['program'] = json_decode($this->curl->simple_get($this->API.'/C_program_server'));
            $this->load->view('daftar_client/create', $data);
        }
    }
    
    // edit data kontak
    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                'kode'           => $this->input->post('kode'),
                'nama'      =>  $this->input->post('nama'),
                'alamat'      =>  $this->input->post('alamat'),
                'email'      =>  $this->input->post('email'),
                'no_hp'      =>  $this->input->post('no_hp'),
                'sekolah'      =>  $this->input->post('sekolah'),
                'nama_ortu' =>  $this->input->post('nama_ortu'),
                'no_hp_ortu'      =>  $this->input->post('no_hp_ortu'),
                'id_program'      =>  $this->input->post('id_program'),
                'id_cabang'      =>  $this->input->post('id_cabang')
            );
            $update =  $this->curl->simple_put($this->API.'/C_daftar_server', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('C_daftar_client');
        }else{
            $params = array('kode'=>  $this->uri->segment(3));
            $data['daftar'] = json_decode($this->curl->simple_get($this->API.'/C_daftar_server',$params));
            $data['program'] = json_decode($this->curl->simple_get($this->API.'/C_program_server'));
            $this->load->view('daftar_client/edit',$data);
        }
    }
    
    // delete data kontak
    function delete($id){
        if(empty($id)){
            redirect('C_daftar_client');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/C_daftar_server', array('kode'=>$id), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('C_daftar_client');
        }
    }

    function daftar() {
        if(isset($_POST['submit'])){
            $data = array(
                'kode'           => $this->input->post(''),
                'nama'      =>  $this->input->post('nama'),
                'alamat'      =>  $this->input->post('alamat'),
                'email'      =>  $this->input->post('email'),
                'no_hp'      =>  $this->input->post('no_hp'),
                'sekolah'      =>  $this->input->post('sekolah'),
                'nama_ortu'=>  $this->input->post('nama_ortu'),
                'status'    =>  "daftar",
                'no_hp_ortu'      =>  $this->input->post('no_hp_ortu'),
                'id_program'      =>  $this->input->post('id_program')
            );

            $insert = $this->M_daftar->insert($data); 
            
            redirect('C_admin/daftar');
        }else{
            $params = array('kode'=>  $this->uri->segment(3));
            $data['daftar'] = json_decode($this->curl->simple_get($this->API.'/C_daftar_server',$params));
            $this->load->view('daftar_client/daftar',$data);
        }
    }

}