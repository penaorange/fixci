<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Berbayar extends MX_Controller {

    public $data = array();

    function __construct() {
        parent::__construct();
        $this->load->model('Mberbayar');
    }

    public function index() {
        //pengecekan session admin berbayar
        if ($this->session->userdata('admin_data')) {
            $this->tampilPeserta();
        } else {
            redirect(site_url('Login'));
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
            'password' => htmlspecialchars($this->input->post('password')),
            'id_kelompok_keilmuan' => htmlspecialchars($this->input->post('kelompokujian')),
            'id_kelompok_peserta' => '2',
            'hash' => md5(rand(0, 1000))
        );



        $this->Mberbayar->simpanPeserta($this->data);

        $this->session->set_userdata($this->input->post('nama') . $this->input->post('nohp'), 1);
        $this->sendMail(htmlspecialchars($this->input->post('email')));

        redirect(site_url('Berbayar'));
    }

    function tampilPeserta() {
        $data['peserta'] = $this->Mberbayar->tampilPeserta()->result();

        $this->load->view('Berbayar', $data);
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
        $data['username'] = htmlspecialchars($this->input->post('username'));
        $data['password'] = htmlspecialchars($this->input->post('password'));
        $data['id_kelompok_peserta'] = htmlspecialchars($this->input->post('kelompokpeserta'));

        $this->Mberbayar->ubahPeserta($id, $data);
//        $this->tampilPeserta();   
        redirect(site_url('Berbayar'));
    }

    function hapusPeserta() {
        $id = $this->input->get('id');

        $this->Mberbayar->hapusPeserta($id);
        redirect(site_url('Berbayar'));
    }

    function detailpeserta() {
        $id = $this->uri->segment(2);

        $data['peserta'] = $this->Mberbayar->tampilDetail($id)->result();
        foreach ($data['peserta'] as $key) {
            $this->session->unset_userdata($key->nm_peserta . $key->no_hp);
        }
        $this->load->view('Detailpeserta', $data);
    }

    function sendMail($email) {
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_user' => 'suport.cermatinstitute@gmail.com', // change it to yours
            'smtp_pass' => '1mZDr779nk', // change it to yours
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );


        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('Cermat Institute'); // change it to yours
        $this->email->to($email); // change it to yours

        $message = /* -----------email body starts----------- */
                "Terima kasih telah mendaftar, " . $_POST['nama'] . "!
      
        
        Berikut detail akun anda:
        
        Username   : " . $_POST['username'] . "
        Password: " . $_POST['password'] . "
       
                        
        Klik link berikut untuk aktivasi akun anda:
            
        " . base_url() . "Berbayar/konfirmasi?" .
                "email=" . $_POST['email'] . "&hash=" . $this->data['hash'];
        /* -----------email body ends----------- */



        $this->email->subject('Aktifasi akun');
        $this->email->message($message);
        $this->email->send();
    }

    function konfirmasi() {
        $result = $this->Mberbayar->get_hash_value($_GET['email']);
        if ($result) {
            foreach ($result as $value) {


                if ($value->hash == $_GET['hash']) {
                    $this->Mberbayar->verify_user($_GET['email']);
                    redirect('Login');
                } else {
                    echo "gagal nyamain";
                }
            }
        } else {
            echo "gagal eksekusi";
        }
    }

}
