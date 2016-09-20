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

	function lihatNilai($data){
		$this->db->select('*');
    $this->db->from('tb_jawaban');
		$this->db->where($data);
		return $this->db->get();
	}

    public function insertPeserta($data) {
        $this->db->insert('peserta', $data);
    }

}
