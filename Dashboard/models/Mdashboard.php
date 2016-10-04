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
        $this->db->where('id_kelompok_peserta', 3);
        $this->db->from('tb_peserta');
        return $this->db->get();
    }

    public function jumlahTryout() {
        $this->db->select('COUNT(id_tryout) as total');
        $this->db->from('tb_tryout');
        return $this->db->get();
    }

    public function dataAdmin($id) {
        if (isset($id)) {
            $this->db->select('*');
            $this->db->where('id_admin', $this->session->userdata('id_admin'));
            $this->db->from('tb_admin');
            return $this->db->get();
        } else {
            redirect(base_url('Error'));
        }
    }

    public function ubahData($id_admin, $passwordlama, $data) {
        $this->db->where('id_admin', $id_admin);
        $this->db->where('password', $passwordlama);
        $this->db->update('tb_admin', $data);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('notif', 'Data admin telah dirubah');
        } else {
            $this->session->set_flashdata('notif', 'Data gagal dirubah');
        }
    }

}
