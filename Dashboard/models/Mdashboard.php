<?php

class Mdashboard extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function jumlahPeserta() {
        $this->db->select('COUNT(id_peserta) as total');
        $this->db->from('tb_peserta');
        return $this->db->get();
    }

    public function jumlahPesertaTrial() {
        $this->db->select('COUNT(id_peserta) as total');
        $this->db->where('id_kelompok_peserta', 1);
        $this->db->from('tb_peserta');
        return $this->db->get();
    }

    public function jumlahPesertaBerbayar() {
        $this->db->select('COUNT(id_peserta) as total');
        $this->db->where('id_kelompok_peserta', 2);
        $this->db->from('tb_peserta');
        return $this->db->get();
    }

    public function jumlahPesertaBimbel() {
        $this->db->select('COUNT(id_peserta) as total');
        $this->db->where('id_kelompok_peserta', 2);
        $this->db->from('tb_peserta');
        return $this->db->get();
    }

    public function jumlahTryout() {
        $this->db->select('COUNT(id_tryout) as total');
        $this->db->from('tb_tryout');
        return $this->db->get();
    }

}
