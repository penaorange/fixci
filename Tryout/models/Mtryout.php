<?phpclass Mtryout extends CI_Model {    function simpanTryout($data) {        $this->db->insert('tb_tryout', $data);    }    function tampilTryout() {        $this->db->select('id_tryout,nm_tryout,tgl_to,to_kk,to_kp');        $this->db->from('tb_tryout');        return $this->db->get();    }    function tampilTryoutTrial() {        $this->db->select('id_tryout,nm_tryout,tgl_to,to_kk,to_kp');        $this->db->from('tb_tryout');        $this->db->where('to_kp', '1');        return $this->db->get();    }    function tampilTryoutBerbayar() {        $this->db->select('id_tryout,nm_tryout,tgl_to,to_kk,to_kp');        $this->db->from('tb_tryout');        $this->db->where('to_kp', '2');        return $this->db->get();    }    function tampilTryoutBimbel() {        $this->db->select('id_tryout,nm_tryout,tgl_to,to_kk,to_kp');        $this->db->from('tb_tryout');        $this->db->where('to_kp', '3');        return $this->db->get();    }    function hapusTryout($id) {        $this->db->where('id_tryout', $id);        $this->db->delete('tb_tryout');    }    function ubahTO($id, $data) {        $this->db->where('id_tryout', $id);        $this->db->update('tb_tryout', $data);    }    function hitungPeserta() {        $this->db->query("SELECT COUNT(id_peserta) AS jumlah_peserta FROM `kelompok_ujian_try_out`WHERE id_try_out ='1'");        return $this->db->get();    }    function tampilMapel($id) {        $this->db->select('tb_transaksi_to_mapel.id_transaksi, tb_tryout.id_tryout, tb_mapel.id_mapel, nm_mapel,jml_soal,waktu');        $this->db->from('tb_transaksi_to_mapel');        $this->db->JOIN('tb_mapel', 'tb_mapel.id_mapel = tb_transaksi_to_mapel.id_mapel');        $this->db->JOIN('tb_tryout', 'tb_transaksi_to_mapel.id_tryout = tb_tryout.id_tryout');        $this->db->where('tb_transaksi_to_mapel.id_tryout', $id);        return $this->db->get();    }         function tampilMapelAll() {        $this->db->select('id_mapel,nm_mapel,jml_soal,waktu');        $this->db->from('tb_mapel');        return $this->db->get();    }        function simpanMapelTo($data) {        $this->db->insert('tb_transaksi_to_mapel', $data);    }        function hapusTransaksi($id) {        $this->db->where('id_transaksi', $id);        $this->db->delete('tb_transaksi_to_mapel');    }}