<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Mdashboard');
    }

    public function index() {
        $data['totalpeserta'] = $this->Mdashboard->jumlahPeserta()->result();
        $data['totalpesertaTrial'] = $this->Mdashboard->jumlahPesertaTrial()->result();
        $data['totalpesertaBerbayar'] = $this->Mdashboard->jumlahPesertaBerbayar()->result();
        $data['totalpesertaBimbel'] = $this->Mdashboard->jumlahPesertaBimbel()->result();
        $data['totaltryout'] = $this->Mdashboard->jumlahTryout()->result();
        $this->load->view('Dashboard',$data);
    }

}
