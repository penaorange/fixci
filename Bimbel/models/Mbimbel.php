<?php
class Mbimbel extends CI_Model {
    
    function simpanPeserta($data){
        $this->db->insert('tb_peserta',$data);
    }
    function ubahPeserta($id,$data){
        $this->db->where('id_peserta',$id);
        $this->db->update('tb_peserta',$data);
    }
    function tampilPeserta(){
        $this->db->select('id_peserta,nm_peserta,jenis_kelamin,alamat,no_hp,email,username,password,konfirmasi,id_kelompok_peserta,id_kelompok_keilmuan');
        $this->db->from('tb_peserta');
        $this->db->where('id_kelompok_peserta','3');
        return $this->db->get();
    }
    
    function hapusPeserta($id){
        $this->db->where('id_peserta',$id);
        $this->db->delete('tb_peserta');
    }
    
    function tampilDetail($id){
        $this->db->select('*');
        $this->db->from('tb_peserta');
        $this->db->where('id_peserta',$id);
        return $this->db->get();    
    }
    
      function get_hash_value($email){
        $this->db->select('hash');
        $this->db->from('tb_peserta');
        $this->db->where('email',$email);
        
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result(); //if data is true
        } else {
            return false; //if data is wrong
        }   
    }
    
    function verify_user($email){
        $this->db->query("update tb_peserta set konfirmasi = 1 where email ='$email'");
    }
}

