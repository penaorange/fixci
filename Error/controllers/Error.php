<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Error extends MX_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('Dashboard');
    }

    function adminprofil() {
        $id = $this->session->userdata('id_admin');
        if (isset($id)) {
            $data['admin'] = $this->Mdashboard->dataAdmin()->result();
            $this->load->view('adminProfil', $data);
        }else{
            redirect(base_url('Error'));
        }
    }

}
