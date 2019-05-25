<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class C_siswa_server extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data kontak
    function index_get() {
        $id = $this->get('kode');
        if ($id == '') {
            $kontak = $this->db->get('siswa')->result();
        } else {
            $this->db->where('kode', $id);
            $kontak = $this->db->get('siswa')->result();
        }
        $this->response($kontak, 200);
    }

    //Mengirim atau menambah data kontak baru
    function index_post() {
        $data = array(
            'kode'           => $this->post('kode'),
            'nama'      =>  $this->post('nama'),
            'email'      =>  $this->post('email'),
            'no_hp'      =>  $this->post('no_hp'),
            'alamat'      =>  $this->post('alamat'),
            'id_cabang'      =>  $this->post('id_cabang')
        );
        $insert = $this->db->insert('siswa', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Memperbarui data kontak yang telah ada
    function index_put() {
        $id = $this->put('kode');
        $data = array(
            'kode'           => $this->put('kode'),
            'nama'      =>  $this->put('nama'),
            'email'      =>  $this->put('email'),
            'no_hp'      =>  $this->put('no_hp'),
            'alamat'      =>  $this->put('alamat'),
            'id_cabang'      =>  $this->put('id_cabang')
        );
        $this->db->where('kode', $id);
        $update = $this->db->update('siswa', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Menghapus salah satu data kontak
    function index_delete() {
        $id = $this->delete('kode');
        $this->db->where('kode', $id);
        $delete = $this->db->delete('siswa');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Masukan function selanjutnya disini
}
?>