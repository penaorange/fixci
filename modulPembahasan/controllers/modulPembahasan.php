<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ModulPembahasan extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('MPembahasan');
    }

    public function index() {
        $this->tampilModul();
    }

    function upload() {
        $config['upload_path'] = 'assets/modul_pembahasan/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = 10000;
        $config['remove_spaces'] = true;
        $this->load->library('upload', $config);
//        $this->load->helper('file');

        if (!$this->upload->do_upload('modul')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('pembahasan', $error);
        } else {

            $data['nama'] = $this->input->post('nama');
            $data['url'] = 'assets/modul_pembahasan/'.$this->upload->data('file_name');
            $data['kelompok_ujian'] = $this->input->post('kelompokujian');
            $data['upload_time'] = date('Y-m-d');
            $this->MPembahasan->simpanModul($data);
            redirect('modulPembahasan');
        }
    }

    function tampilModul() {
        $data['modul'] = $this->MPembahasan->tampilModul()->result();
        $this->load->view('Pembahasan', $data);
    }
    function hapusModul($id) {
        $modul = $this->MPembahasan->tampilModul($id)->result();
        foreach ($modul as $value) {
            unlink($value->url);
            
        }
        $this->MPembahasan->hapusModul($id);
        redirect('modulPembahasan');
    }

   

}
