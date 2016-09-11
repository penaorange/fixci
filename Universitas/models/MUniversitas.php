<?php

class MUniversitas extends CI_Model {

    //query menampilkan data universitas
    function tampilUniv() {
        $this->db->select('id_universitas,nm_universitas,wilayah');
        $this->db->from('tb_universitas');
        return $this->db->get();
    }

    //Query menambahkan data universitas
    function simpanUniv($data) {
        $this->db->insert('tb_universitas', $data);
    }

    function hapusUniv($id) {
        $this->db->where('id_universitas', $id);
        $this->db->delete('tb_universitas');
    }

    function ubahUniv($id, $data) {
        $this->db->where('id_universitas', $id);
        $this->db->update('tb_universitas', $data);
    }

    function tampilProdi($id) {
        $this->db->select('*');
        $this->db->from('tb_prodi');
        $this->db->where('id_universitas', $id);
        return $this->db->get();
    }

    function simpanProdi($data) {
        $this->db->insert('tb_prodi', $data);
    }

    function hapusProdi($id) {
        $this->db->where('id_prodi', $id);
        $this->db->delete('tb_prodi');
    }

    function ubahProdi($id, $data) {
        $this->db->where('id_prodi', $id);
        $this->db->update('tb_prodi', $data);
    }

}
