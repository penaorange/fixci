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
        $this->load->view('Dashboard', $data);
    }

    function adminprofil() {
        $id = $this->session->userdata('id_admin');
        if (isset($id)) {
            $data['admin'] = $this->Mdashboard->dataAdmin($id)->result();
            $this->load->view('adminProfil', $data);
        } else {
            redirect(base_url('Error'));
        }
    }

    public function rubahPassword() {
        $id_admin = $this->session->userdata('id_admin');
        $passwordlama = md5(htmlspecialchars($this->input->post('oldpassword')));
        
        $data['username'] = htmlspecialchars($this->input->post('username'));
        $data['password'] = md5(htmlspecialchars($this->input->post('newpassword')));
        
        $this->Mdashboard->ubahData($id_admin, $passwordlama, $data);

        redirect(base_url('index.php/Dashboard/adminprofil'));
    }

}
