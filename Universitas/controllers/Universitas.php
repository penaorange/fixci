<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Universitas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('MUniversitas');
    }

    public function index() {
        $this->tampilUniv();
    }

    public function tampilUniv() {
        $data['univ'] = $this->MUniversitas->tampilUniv()->result();
        $this->load->view('vUniversitas', $data);
    }

    function tambahUniv() {
        $data['nm_universitas'] = htmlspecialchars($this->input->post('nm_universitas'));
        $data['wilayah'] = htmlspecialchars($this->input->post('wilayah'));
        $this->MUniversitas->simpanUniv($data);
        redirect(site_url('Universitas'));
    }

    function hapusUniv() {
        $id = $this->input->get('id');
        $this->MUniversitas->hapusUniv($id);
        redirect(site_url('Universitas'));
    }

    function ubahUniv() {
        $id = $this->input->post('id');
        $data['nm_universitas'] = htmlspecialchars($this->input->post('nm_universitas'));
        $data['wilayah'] = htmlspecialchars($this->input->post('wilayah'));

        $this->MUniversitas->ubahUniv($id, $data);
        redirect(site_url('Universitas'));
    }

    //fungsi pindah untuk melihat prodi dari setiap universitas
    function tampilProdi() {
        $id = $this->uri->segment(3);
        $data['prodi'] = $this->MUniversitas->tampilProdi($id)->result();
        $this->load->view('vProdi', $data);
    }

    //fungsi untuk menambak prodi pada universitas
    function tambahProdi() {
        $data['id_prodi'] = htmlspecialchars($this->input->post('id_prodi'));
        $data['nm_prodi'] = htmlspecialchars($this->input->post('nm_prodi'));
        $data['id_jenis'] = htmlspecialchars($this->input->post('jenis_prodi'));
        $data['nilai_aman'] = htmlspecialchars($this->input->post('nilai_aman'));
        $data['id_universitas'] = htmlspecialchars($this->input->post('id_universitas'));
        $this->MUniversitas->simpanProdi($data);
        redirect(site_url('Universitas/tampilProdi/' . $data['id_universitas']));
    }

//    fungsi untuk menghapus prodi
    function hapusProdi() {
        $id_prodi = htmlspecialchars($this->input->post('id_prodi'));
        $id_universitas = htmlspecialchars($this->input->post('id_universitas'));

        $this->MUniversitas->hapusProdi($id_prodi);
        redirect(site_url('Universitas/tampilProdi/' . $id_universitas));
    }

//    fungsi untuk merubah data prodi
    function ubahProdi() {
        $id_prodi = $this->input->post('id_prodi');
        $id_universitas = htmlspecialchars($this->input->post('id_universitas'));

        $data['nm_prodi'] = htmlspecialchars($this->input->post('nm_prodi'));
        $data['id_jenis'] = htmlspecialchars($this->input->post('jenis_prodi'));
        $data['nilai_aman'] = htmlspecialchars($this->input->post('nilai_aman'));

        $this->MUniversitas->ubahProdi($id_prodi, $data);
        redirect(site_url('Universitas/tampilProdi/' . $id_universitas));
    }

}
