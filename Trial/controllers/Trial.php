<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Trial extends MX_Controller {

    public $data = array();

    function __construct() {
        parent::__construct();
        $this->load->model('Mtrial');
    }

    public function index() {
        //pengecekan session admin trial
        if ($this->session->userdata('admin_data')) {
            $this->tampilPeserta();
        } else {
            redirect('Login', 'refresh');
        }
    }

    function tambahPeserta() {
    	
        $this->data = array(
            'nm_peserta' => htmlspecialchars($this->input->post('nama')),
            'jenis_kelamin' => htmlspecialchars($this->input->post('jeniskelamin')),
            'alamat' => htmlspecialchars($this->input->post('alamat')),
            'no_hp' => htmlspecialchars($this->input->post('nohp')),
            'email' => htmlspecialchars($this->input->post('email')),
            'username' => htmlspecialchars($this->input->post('username')),
            'password' => md5($this->input->post('password')),
            'id_kelompok_keilmuan' => htmlspecialchars($this->input->post('kelompokujian')),
            'id_kelompok_peserta' => '1',
            'hash' => md5(rand(0, 1000))
        );



        $this->Mtrial->simpanPeserta($this->data);

        $this->session->set_userdata($this->input->post('nama') . $this->input->post('nohp'), 1);
        $this->sendMail($this->data['email']);

        redirect(site_url('Trial'));
    }

    function tampilPeserta() {
        $data['peserta'] = $this->Mtrial->tampilPeserta()->result();
        $this->load->view('Trial', $data);
    }
    function data($id = null){
        $peserta = $this->Mtrial->tampilDetail($id)->row();
        echo json_encode($peserta);
    }
    function ubahPeserta() {
        $id = $this->input->post('id');
        $data['nm_peserta'] = htmlspecialchars($this->input->post('nama'));
        $data['jenis_kelamin'] = htmlspecialchars($this->input->post('jeniskelamin'));
        $data['no_hp'] = htmlspecialchars($this->input->post('nohp'));
        $data['id_kelompok_keilmuan'] = htmlspecialchars($this->input->post('kelompokujian'));
        $data['email'] = htmlspecialchars($this->input->post('email'));
        $data['konfirmasi'] = htmlspecialchars($this->input->post('konfirmasi'));
        $data['alamat'] = htmlspecialchars($this->input->post('alamat'));
        $data['username'] = $this->input->post('username');
        $data['password'] = $this->input->post('password');
        $data['id_kelompok_peserta'] = htmlspecialchars($this->input->post('kelompokpeserta'));
        $this->Mtrial->ubahPeserta($id, $data);
//        $this->tampilPeserta();   
        redirect(site_url('Trial'));
    }

    function sendMail($email) {
        $config = Array(
            'smtp_host' => 'mail.cermatinstitute.com',
            'smtp_port' => 465,
            'smtp_user' => 'support@cermatinstitute.com', // change it to yours
            'smtp_pass' => '123qweasd', // change it to yours
            'smtp_auth' => true,
        );


        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('cermatinstitute'); // change it to yours
        $this->email->to($email); // change it to yours

        $message = /* -----------email body starts----------- */
                "Terima kasih telah mendaftar, " . $this->data['nama'] . "!
      
        
        Berikut detail akun anda:
        
        Username   : " . $this->data['username'] . "
        Password: " . $this->input->post('password') . "
       
                        
        Klik link berikut untuk aktivasi akun anda:
            
        " . base_url() . "Trial/konfirmasi?" .
                "email=" .$email . "&hash=" . $this->data['hash'];
        /* -----------email body ends----------- */



        $this->email->subject('Aktifasi akun');
        $this->email->message($message);
        $this->email->send();
    }

    function konfirmasi() {
        $result = $this->Mtrial->get_hash_value($_GET['email']);
        if ($result) {
            foreach ($result as $value) {
                if ($value->hash == $_GET['hash']) {
                    $this->Mtrial->verify_user($_GET['email']);
                    redirect('Login');
                } else {
                    echo "gagal nyamain";
                }
            }
        } else {
            echo "gagal eksekusi";
        }
    }

    function hapusPeserta($id) {
        $this->Mtrial->hapusPeserta($id);
        redirect(site_url('Trial'));
    }

    function detailpeserta() {
        $id = $this->uri->segment(2);

        $data['peserta'] = $this->Mtrial->tampilDetail($id)->result();
        foreach ($data['peserta'] as $key) {
            $this->session->unset_userdata($key->nm_peserta . $key->no_hp);
        }
        $this->load->view('Detailpeserta', $data);
    }

}
