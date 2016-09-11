<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Soal extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('MSoal');
    }

    public function index() {
        $this->tampilSoal();
    }

    public function tampilSoal() {
        $data['soal'] = $this->MSoal->tampilSoal()->result();
        $this->load->view('Soal', $data);
    }
    public function data($id){
        $data = $this->MSoal->tampilSatuMapel($id)->row();
        echo json_encode($data);
    }
    public function dataMapel($id){
        $data = $this->MSoal->tampilJumlahSoal($id)->row();
        echo json_encode($data);
    }

    public function editMapel($id = null) {
        $data = $this->input->post(null,true);
        $where['id_mapel'] = $id;
        if ($this->MSoal->editMapel($data, $where)) {
            redirect('Soal');
        }
    }

    function hapusMapel($id=null) {
        $where['id_mapel'] = $id;
        $this->MSoal->hapusMapel($where);
        redirect('Soal');
    }

    public function buatSoal() {
        $id = $this->uri->segment(3);
        $jumlah = $this->MSoal->tampilJumlahSoal($id)->result();
        $soal = $this->MSoal->tampilJumlahSoalPublish($id);
        foreach ($soal as $sl) {
            foreach ($jumlah as $jml) {
                if ($sl->jumlah_soal == $jml->jml_soal) {
                    $error = 1;
                    $this->session->set_flashdata('gagal', 'Jumlah soal sudah mencukupi kuota');
                    redirect(site_url()."/Soal");
                } 
            }
        }
        $data['jumlah_soal'] = $this->MSoal->tampilJumlahSoalPublish($id);
        $this->load->view('Inputsoal', $data);
    }

    public function lihatSoal($id) {
        $data['mapel'] = $this->MSoal->tampilSatuMapel($id)->result();
        $data['soal'] = $this->MSoal->tampilDataSoal($id)->result();
        $this->load->view('lihatsoal',$data);
    }

    public function updateSoal($idSoal) {
        $data['soal'] = $this->MSoal->tampilSoalSingle($idSoal)->result();
        $this->load->view('updateSoal', $data);
    }

    public function editSoal($id=null) {
        $data = $this->input->post(null,true);
        $where['id_soal'] = $id;
        if ($this->MSoal->editSoal($data, $where)) {
            redirect(base_url()."Soal/lihatSoal/".$this->input->post('id_mapel'));
        }
    }

    public function tambahSoal() {
        $data = $this->input->post(null, true);
        $jumlah = $this->MSoal->tampilJumlahSoal($this->input->post('id_mapel'))->result();
        $soal = $this->MSoal->tampilJumlahSoalPublish($this->input->post('id_mapel'));
        $mapel = $this->input->post('id_mapel');

        foreach ($soal as $sl) {
            foreach ($jumlah as $jml) {
                if ($sl->jumlah_soal + 1 == $jml->jml_soal) {
                    $this->MSoal->simpanSoal($data);
                    redirect(site_url("Soal"));
                } else {
                    $this->MSoal->simpanSoal($data);
                    redirect(site_url() . "/Soal/buatSoal/" . $mapel);
                }
            }
        }
    }
    
    public function tambahMataPelajaran() {
       $data = $this->input->post(null,true);
//        $idKluj = $this->uri->segment(4);
//        $to = $this->uri->segment(3);
        $this->MSoal->simpanMapel($data);
        redirect('Soal');
    }

    public function tampilMapel() {
        $data['id'] = $this->uri->segment(2);
        $data['mapel'] = $this->MSoal->tampilMapel($this->uri->segment(2))->result();
        $data['soal'] = $this->MSoal->tampilSoal()->result();
        $id = null;
        $data['sisa_soal'] = null;

        $this->load->view('Soal', $data);
    }

}
