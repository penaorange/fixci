<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login_model
 *
 * @author abdullah
 */
class Model_login extends CI_Model {

    //put your code here

    function __construct() {
        parent::__construct();
    }

    public function get_peserta($where = null){
      //get user
      $this->db->select("*");
      // $this->db->order_by("STR_TO_DATE(date_of_birth, '%d/%m/%Y')");
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get('tb_peserta');
    }

    public function get_admin($where = null){
      //get user
      $this->db->select("*");
      // $this->db->order_by("STR_TO_DATE(date_of_birth, '%d/%m/%Y')");
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get('tb_admin');
    }

	 public function login($username, $password) {
        //create query to connect user login database
        $this->db->select('*');
        $this->db->from('tb_peserta');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->where('konfirmasi', 1);

        $this->db->where('id_peserta IS NOT NULL');
        $this->db->limit(1);

        //get query and processing
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result(); //if data is true
        } else {
            return false; //if data is wrong
        }
    }

  // public function insertPeserta($data){
  //       $this->db->insert('tb_peserta', $data);
  //   }
  public function insertPeserta($data = null){
      $result = false;
      if ($data != null) {
          $this->db->insert('tb_peserta', $data);
          $result = $this->db->insert_id();
      }
      return $result;
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

    // public function get_users($where = null){
    //   $this->db->select("*");
    //     if ($where != null) {
    //         $this->db->where($where);
    //     }
    //     return $this->db->get('peserta');
    // }

    //fungsi untuk mengidentifikasi apakah email dan username sama.
    function mail_username_validation($mail, $username){
        //create query to connect user login database
        $this->db->select('*');
        $this->db->from('tb_peserta');
        $where = "(username='$username' or email = '$mail')";
        $this->db->where($where);
       return $this->db->get();
        //
        // //get query and processing
        // $query = $this->db->get();
        // if ($query->num_rows() == 1) {
        //     return $query->result(); //if data is true
        // } else {
        //     return false; //if data is wrong
        // }

    }

}
?>
