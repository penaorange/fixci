<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tryout extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Mtryout');
    }

    public function index() {
        $this->tampilTryOut();
    }

    function tampilTryOut() {
        $data['tryout'] = $this->Mtryout->tampilTryout()->result();
        $data['tryouttrial'] = $this->Mtryout->tampilTryoutTrial()->result();
        $data['tryoutberbayar'] = $this->Mtryout->tampilTryoutBerbayar()->result();
        $data['tryoutbimbel'] = $this->Mtryout->tampilTryoutBimbel()->result();
        $this->load->view('Tryout', $data);
    }

    function tambahTryout() {
        $data['nm_tryout'] = htmlspecialchars($this->input->post('nm_to'));
        $data['tgl_to'] = htmlspecialchars($this->input->post('tanggal'));
        $data['to_kk'] = htmlspecialchars($this->input->post('kelompokujian'));
        $data['to_kp'] = htmlspecialchars($this->input->post('jenis_to'));
        $this->Mtryout->simpanTryout($data);
        redirect(site_url('Tryout'));
    }

    function hitungPeserta() {
        $this->mtryout->hitungpeserta();
    }

    function hapusTO() {
        $id = $this->input->get('id');
        $this->Mtryout->hapusTryout($id);
        redirect(site_url('Tryout'));
    }

    function ubahTO() {
        $id = $this->input->post('id');
        $data['nm_tryout'] = htmlspecialchars($this->input->post('nm_to'));
        $data['tgl_to'] = htmlspecialchars($this->input->post('tanggal_ujian'));
        $data['to_kp'] = htmlspecialchars($this->input->post('jenis_to'));
        $data['to_kk'] = htmlspecialchars($this->input->post('kelompokujian'));

        $this->Mtryout->ubahTO($id, $data);
        redirect(site_url('Tryout'));
    }

    function tampilMapel() {
        $id = $this->uri->segment(3);
        $data['mapel'] = $this->Mtryout->tampilMapel($id)->result();
        $data['mapelAll'] = $this->Mtryout->tampilMapelAll()->result();
        $this->load->view('vMapel', $data);
    }

    function tambahMapelTo() {
        $data['id_tryout'] = $this->input->get('to');
        $data['id_mapel'] = $id = $this->input->get('id');
        $this->Mtryout->simpanMapelTo($data);
        redirect(site_url('Tryout/tampilMapel/' . $data['id_tryout']));
    }

    function hapusTransaksi() {
        $id = $this->input->get('id');
        $data['id_tryout'] = $this->input->post('id_tryout');
        $this->Mtryout->hapusTransaksi($id);
        redirect(site_url('Tryout/tampilMapel/'.$data['id_tryout']));
    }

}
