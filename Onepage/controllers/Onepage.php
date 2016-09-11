<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Onepage extends MX_Controller {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->load->helper('url');
                $this->murl = 'assets/';
        }

	public function index(){
        $data['murl'] = $this->murl;
        $this->load->view('vmain',$data);
	}
        
    public function main(){
       $data['murl'] = $this->murl;
       $this->load->view('vmain',$data);
    }

    public function faq(){
       $data['murl'] = $this->murl;
       $this->load->view('vfaq',$data);
    }
}
