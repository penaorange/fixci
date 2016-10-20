<?php

class Model_free extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function select_all() {
        $this->db->select('*');
        $this->db->from('peserta');
        // $this->db->order_by('date_modified', "desc");

        return $this->db->get();
    }

    public function select_profil($id_profil) {
        $this->db->select('*');
        $this->db->from('tb_peserta');
        $this->db->where($id_profil);
        // $this->db->order_by('date_modified', "desc");

        return $this->db->get();
    }

    public function select_tryout($id) {
        $this->db->select('*');
        $this->db->from('tb_tryout');
        $this->db->where($id);
        $this->db->order_by('id_tryout', "desc");
        return $this->db->get();
    }

    public function select_detail_tryout($id_try, $id_kk, $id_kp) {
        $this->db->select('id_transaksi, tb_tryout.id_tryout, tb_mapel.id_mapel, nm_mapel, jml_soal,waktu');
        $this->db->from('tb_transaksi_to_mapel');
        $this->db->JOIN('tb_mapel', 'tb_mapel.id_mapel = tb_transaksi_to_mapel.id_mapel');
        $this->db->JOIN('tb_tryout', 'tb_transaksi_to_mapel.id_tryout = tb_tryout.id_tryout');
        $this->db->where('tb_transaksi_to_mapel.id_tryout', $id_try);
        $this->db->where('tb_tryout.to_kk', $id_kk);
        $this->db->where('tb_tryout.to_kp', $id_kp);
        return $this->db->get();
    }

    public function tampil_soal_tryout($id) {
        $this->db->select('*');
        $this->db->from('tb_soal');
        $this->db->join('tb_mapel', 'tb_mapel.id_mapel = tb_soal.id_mapel');
        $this->db->where('tb_soal.id_mapel', $id);
        // $this->db->where('soal_ujian.id_tryout', $idTo);
        // $this->db->limit(5,0);
        // $this->db->order_by("RAND ()");

        return $this->db->get();
    }

    public function jawaban_soal_tryout($id) {
        $this->db->select('id_soal ,jawaban_soal');
        $this->db->from('tb_soal');
        $this->db->join('tb_mapel', 'tb_mapel.id_mapel = tb_soal.id_mapel');
        $this->db->where('tb_soal.id_mapel', $id);
        // $this->db->limit(5,0);
        // $this->db->order_by("RAND ()");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function insertNilai($nilai) {
        $this->db->insert('tb_jawaban', $nilai);
    }

    function lihatNilai($data) {
        $this->db->select('*');
        $this->db->from('tb_jawaban');
        $this->db->where($data);
        return $this->db->get();
    }

    // public function insertPeserta($data) {
    //     $this->db->insert('peserta', $data);
    // }

    public function ubah_profil($data = null, $where = null) {
        $result = false;
        if ($data != null && $where != null) {
            $this->db->set($data);
            $this->db->where($where);
            $this->db->update('tb_peserta');
        }
        return $result;
    }

    public function select_nilai_tryout($id) {
        $this->db->select('tb_tryout.nm_tryout, tb_tryout.tgl_to, tb_mapel.nm_mapel, tb_jawaban.jmlh_kosong, tb_jawaban.jmlh_benar, tb_jawaban.jmlh_salah, tb_jawaban.total_nilai');
        $this->db->from('tb_jawaban');
        $this->db->join('tb_tryout', 'tb_jawaban.id_tryout = tb_tryout.id_tryout');
        $this->db->join('tb_mapel', 'tb_jawaban.id_mapel = tb_mapel.id_mapel');
        $this->db->where($id);
        return $this->db->get();
    }

    public function nilaiAman($id1) {
        $this->db->select('nilai_aman');
        $this->db->from('tb_prodi');
        $this->db->where($id1);
        return $this->db->get();
//        $aman1 = $query->result_array();
//        $this->db->select('nilai_aman');
//        $this->db->from('tb_prodi');
//        $this->db->where('id_prodi', $id2);
//        $query = $this->db->get();
//        $aman2 = $query->result_array();
//        
//        $this->db->select('nilai_aman');
//        $this->db->from('tb_prodi');
//        $this->db->where('id_prodi', $id3);
//        $query = $this->db->get();
//        $aman3 = $query->result_array();
//        return array(
//            'aman_1' => $aman1,
////            'aman_2' => $aman2,
////            'aman_3' => $aman3,
//        );
    }

    public function nilaiTotal($id_peserta, $id_tryout) {
        $this->db->select('SUM(total_nilai) as totalnilai');
        $this->db->from('tb_jawaban');
        $this->db->where('id_peserta', $id_peserta);
        $this->db->where('id_tryout', $id_tryout);

        return $this->db->get();
    }

    public function nilaiAkhir($data) {
        $this->db->insert('tb_hasil', $data);
    }
    
    public function getUniversitas($where = null){
        $this->db->select('id_universitas,nm_universitas,wilayah');
        if ($where !=null) {
            $this->db->where($where);
        }
        return $this->db->get('tb_universitas');
    }
    public function getProdi($where = null){
        $this->db->select('id_prodi,nm_prodi,nilai_aman,id_jenis,id_universitas');
        if ($where !=null) {
            $this->db->where($where);
        }
        return $this->db->get('tb_prodi');
    }

    public function tampilNilaiNas($id) {
        $this->db->select('nm_tryout as nm_to,tryout.id_tryout as id_to, nilai_to as nilai, pilihan1 as pil1, aman_1 as aman1');
        $this->db->from('tb_hasil as hasil');
        $this->db->join('tb_tryout as tryout', 'hasil.id_tryout = tryout.id_tryout');
        $this->db->where('hasil.id_peserta', $id);
        return $this->db->get();
    }

    public function getnamaprodi($id) {
        $this->db->select('*');
        $this->db->from('tb_prodi');
        $this->db->where('id_prodi', $id);
        return $this->db->get();
    }

    public function detailNilai($id_peserta, $id_to) {
        $this->db->select('jaw.id_mapel as idmapel, mapel.nm_mapel as nm_mapel, jmlh_kosong, jmlh_salah,jmlh_benar');
        $this->db->from('tb_jawaban as jaw');
        $this->db->join('tb_mapel as mapel','jaw.id_mapel = mapel.id_mapel');
        $this->db->where('id_peserta',$id_peserta);
        $this->db->where('id_tryout',$id_to);
        return $this->db->get();
    }

}
