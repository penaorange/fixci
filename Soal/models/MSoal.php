<?php

class MSoal extends CI_Model {

    function simpanMapel($data) {
        $this->db->insert('tb_mapel', $data);
    }

    function simpanSoal($data) {
        $this->db->insert('tb_soal', $data);
    }

    function ubahPeserta($id, $data) {
        $this->db->where('id_try_out', $id);
        $this->db->update('try_out', $data);
    }

    function tampilSoal() {
        $this->db->select('id_mapel,nm_mapel,jml_soal,waktu');
        $this->db->from('tb_mapel');
        return $this->db->get();
    }

    function tampilMapel($id) {
        $this->db->select('id_mapel,nama_mapel,jumlah_soal,waktu,id_tryout');
        $this->db->from('mata_pelajaran');
        $this->db->where('id_tryout', $id);
        return $this->db->get();
    }

    function tampilSatuMapel($id) {
        $this->db->select('id_mapel,nm_mapel,jml_soal,waktu');
        $this->db->from('tb_mapel');
        $this->db->where('id_mapel', $id);
        return $this->db->get();
    }

    function hapusTryout($id) {
        $this->db->where('id_try_out', $id);
        $this->db->delete('try_out');
    }

    function hitungPeserta() {
        $this->db->query("SELECT COUNT(id_peserta) AS jumlah_peserta FROM `kelompok_ujian_try_out`WHERE id_try_out ='1'");
        return $this->db->get();
    }

    function tampilDataSoal($idMapel) {
        $this->db->select('id_soal,soal,pilihan_a,pilihan_b,pilihan_c,pilihan_d,pilihan_e,jawaban_soal,id_mapel');
        $this->db->from('tb_soal');
        $this->db->where('id_mapel', $idMapel);
        return $this->db->get();
    }

    function tampilSoalSingle($idSoal) {
        $this->db->select('soal,pilihan_a,pilihan_b,pilihan_c,pilihan_d,pilihan_e,jawaban_soal,id_soal,id_mapel');
        $this->db->from('tb_soal');
        $this->db->where('id_soal', $idSoal);
        return $this->db->get();
    }

    function tampilJumlahSoal($idMapel) {
        $this->db->select('jml_soal');
        $this->db->from('tb_mapel');
        $this->db->where('id_mapel', $idMapel);
        return $this->db->get();
    }

    function tampilJumlahSoalPublish($idMapel) {
        $query = $this->db->query("SELECT COUNT(id_soal) AS jumlah_soal FROM tb_soal WHERE id_mapel = " . $idMapel);
        if ($query != null) {
            return $query->result();
        } else {
            return null;
        }
    }

    function editMapel($data, $where) {
        $this->db->set($data);
        $this->db->where($where);
        $this->db->update('tb_mapel');
        return 1;
    }

    function editSoal($data, $where) {
         $this->db->set($data);
        $this->db->where($where);
        $this->db->update('tb_soal');
        return 1;
    }

    function hapusMapel($where) {
        $this->db->where($where);
        $this->db->delete('tb_mapel');
        return 1;
    }

}
