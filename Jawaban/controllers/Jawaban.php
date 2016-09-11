<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jawaban extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('MJawaban');
	}

	public function index()
	{
		$this->tampilJawaban();
	}
	
	public function tampilJawaban(){
		$data['tryout']=$this->MJawaban->tampilTryOut()->result();
		$this->load->view('Jawaban',$data);	
	}
        
        
}
