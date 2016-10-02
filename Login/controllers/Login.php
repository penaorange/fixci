<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->library('l_admin');
        $this->load->helper('url');
        $this->load->model('Model_login');
        $this->load->library('session');
        $this->load->library('pagination');
        $user = $this->session->userdata('user_data');
    }

    function index() {
        $userDaftar = $this->session->userdata('user_daftar');
        $user = $this->session->userdata('user_data');
        if ($user['konfirmasi'] == '0' || !$user || $userDaftar) {
            $this->load->view('View_login');
        } else {
            $this->kelompok_peserta();
        }
    }

    function ceklogin() {
        $data = $this->input->post(null, true);
        //jika tidak ada yang di inputkan ke dalam username/password
        if (empty($data['username']) || empty($data['password'])) {
            redirect(site_url('Login'));
        }
        $where['username'] = $data['username'];
        $user = $this->Model_login->get_peserta($where)->row_array();
        if (!$user) {
            $this->session->set_flashdata('notif', 'Akun belum terdaftar.');
            redirect(site_url('Login'));
            return false;
        } elseif ($user['konfirmasi'] != 0) {
            if ($user['password'] != md5($data['password'])) {
                $this->session->set_flashdata('notif', 'Password yang dimasukan salah.');
                echo 'The password you entered is incorrect. Please enter again.';
                redirect(site_url('Login'));
                return false;
            }
            unset($user['password']);
            unset($user['hash']);
            $this->session->set_userdata('user_data', $user);
            $userdata = $this->session->userdata('user_data');
            $this->kelompok_peserta();
            // var_dump($userdata);
        } else {
            $this->session->set_flashdata('notif', 'Akun belum aktif, cek email akun mu untuk aktifasi');
            redirect(site_url('Login'));
            return false;
        }
    }

    function login_admin() {
        $this->load->view('View_login_admin');
    }

    function cekLoginAdmin() {
        $data = $this->input->post(null, true);
        //jika tidak ada yang di inputkan ke dalam username/password
        if (empty($data['username']) || empty($data['password'])) {
            redirect(site_url('Login'));
        }
        
        $where['username'] = $data['username'];
        $where['password'] = md5($data['password']);
        $admin = $this->Model_login->get_admin($where)->row_array();
        // $this->Model_login->insertPeserta($this->data);
        $this->session->set_userdata('id_admin', $admin['id_admin']);
      
        if (!$admin) {
            $this->session->set_flashdata('notif', 'Wrong Username And password.');
            redirect(site_url('admin'));
            return false;
            //echo "Username Tidak Ditemukan!"
            // $this->twig->display('content/profile');
            // $this->twig->render('content/profile', $userLevel);
        } else {
            if ($admin['password'] != md5($data['password'])) {
                $this->session->set_flashdata('notif', 'The password you entered is incorrect. Please enter again.');
                redirect(site_url('admin'));
                return false;
            }
            unset($admin['password']);
            $this->session->set_userdata('admin_data', $admin);
            
            redirect(site_url('Dashboard'));
        }
    }

    function kelompok_peserta() {
        $user = $this->session->userdata('user_data');
        if ($user['id_kelompok_peserta']) {
            if ($user['id_kelompok_peserta'] == '1') {
                redirect(site_url('peserta-free'));
            } elseif ($user['id_kelompok_peserta'] == '2') {
                redirect(site_url('peserta-berbayar'));
            } elseif ($user['id_kelompok_peserta'] == '3') {
                redirect(site_url('peserta-bimbel'));
            } else {
                echo "halaman tidak tersedia.";
            }
        } elseif ($user['id_admin']) {
            redirect(site_url('Dashboard'));
        } else {
            $this->load->view('View_login');
        }
    }

    function logout() {
        $this->session->unset_userdata('user_data');
        $this->session->unset_userdata('admin_data');
        $this->session->unset_userdata('user_daftar');
        session_destroy();
        $this->session->set_flashdata('terimakasih', 'You have been logged out.');
        redirect(site_url('Login'));
    }

    function halamanDaftar() {
        $this->load->view('View_daftar');
    }

    function daftar() {
        $data = $this->input->post(null, true);
        $data['nm_peserta'] = htmlspecialchars($data['nm_peserta']);
        $data['jenis_kelamin'] = htmlspecialchars($data['jenis_kelamin']);
        $data['alamat'] = htmlspecialchars($data['alamat']);
        $data['no_hp'] = htmlspecialchars($data['no_hp']);
        $data['email'] = htmlspecialchars($data['email']);
        $data['username'] = htmlspecialchars($data['username']);
        $data['hash'] = md5(rand(0, 1000));
        $data['konfirmasi'] = '0';
        $data['id_kelompok_peserta'] = '1';
        $data['password'] = md5($data['password']);
        unset($data['password2']);
        if (strlen($data['password']) >= 100) {
            $this->session->set_flashdata('notif-daftar', 'Failed. please try again');
            redirect(site_url('Daftar'));
            return false;
        }
        $user = $this->Model_login->insertPeserta($data);
        if (!$user) {
            $this->session->set_flashdata('notif-daftar', 'Failed Processing Data. Try Again');
            redirect(site_url('Daftar'));
            return false;
        }
        $daftar['nm_peserta'] = $user['nm_peserta'];
        $daftar['no_hp'] = $user['no_hp'];
        $daftar['konfirmasi'] = $user['konfirmasi'];
        $this->session->set_userdata('user_daftar', $daftar);

        $this->sendMail($data['email'], $data['hash']);
        $this->session->set_flashdata('terimakasih', 'Account Successfully Created. Please Check Email To Activate.');
        redirect(site_url('Login'));
    }

    function cekDaftar() {
        $username = $this->input->post('username');
        $mail = $this->input->post('email');

        //query  database
        $user = $this->Model_login->mail_username_validation($mail, $username)->result();
        if ($user) {
            $this->session->set_flashdata('notif-daftar', 'email Or Username is Already Exist!');
            redirect(site_url('Daftar'));
            return FALSE;
        } else {
            //if daftar ok! validate true
            $this->daftar();
            return TRUE;
        }
    }

    function sendMail($email, $hash) {
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
                "email=" . $email . "&hash=" . $hash;
        /* -----------email body ends----------- */



        $this->email->subject('Aktifasi akun');
        $this->email->message($message);
        $this->email->send();
    }

    function konfirmasi() {
        $result = $this->Model_login->get_hash_value($_GET['email']);
        if ($result) {
            foreach ($result as $value) {
                if ($value->hash == $_GET['hash']) {
                    $this->Model_login->verify_user($_GET['email']);
                    $this->session->set_flashdata('terimakasih', 'Account is Actived!');
                    redirect('Login');
                } else {
                    $this->session->set_flashdata('notif', 'Failed Verification!');
                    redirect('Login');
                }
            }
        } else {
            echo "gagal eksekusi";
        }
    }

}
