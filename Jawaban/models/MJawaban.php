<?php
class MJawaban extends CI_Model{

	public function tampilTryOut(){
		$this->db->select('*');
		$this->db->from('try_out');
	        return $this->db->get();
	}
}