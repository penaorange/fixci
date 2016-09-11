<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Peserta_berbayar extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('l_admin');
		$this->load->helper('url');
		$this->load->model('Model_berbayar');
		$this->load->library('pagination');

		$user = $this->session->userdata('user_data');
		if ($user['konfirmasi'] != '1' || !$user) {
			return false;
			redirect(site_url('Login'));
		}
		if ($user['id_kelompok_peserta'] != '2') {
			return false;
			redirect(site_url('Login'));
		}
	}

	public function index(){
		//pengecekan session peserta bayar
		$user = $this->session->userdata('user_data');
		if($user['id_kelompok_peserta'] == '2') {
			$this->load->view('Halaman_peserta_bayar');
		}else{
			redirect(site_url('Login'));
		}

	}

	public function cek_session(){
		//pengecekan session peserta bayar
		$user = $this->session->userdata('user_data');
		if($user['id_kelompok_peserta'] != '2') {
			redirect(site_url('Login'));
		}else{
			return TRUE;
		}

	}

	function profil_bayar(){
		$this->cek_session();
		$user = $this->session->userdata('user_data');
		$id_profil['id_peserta'] = $user['id_peserta'];
		$data_p['profil_lengkap'] = $this->Model_berbayar->select_profil($id_profil)->row();
		$this->load->view('Profil_bayar', $data_p);
	}

	 function bayar(){
		 $this->cek_session();
		 $this->load->view('Halaman_peserta_bayar');
	}

	function tryout_bayar(){
		// $this->M_peserta->lihatPeserta($id, $data);
		$this->cek_session();
		$user = $this->session->userdata('user_data');
		$id['to_kk']=$user['id_kelompok_keilmuan'];
		$id['to_kp']=$user['id_kelompok_peserta'];
		$data['tryout'] = $this->Model_berbayar->select_tryout($id)->result();
		$this->load->view('Tryout_bayar', $data);
 }

 function detail_tryout_bayar(){
	 $this->cek_session();
	 $user = $this->session->userdata('user_data');
	 $id_kp = $user['id_kelompok_peserta'];
	 $id_kk = $user['id_kelompok_keilmuan'];
   $id_try = $this->uri->segment(2);
   $data['detail_tryout'] = $this->Model_berbayar->select_detail_tryout($id_try, $id_kk, $id_kp)->result();
   $this->load->view('Detail_Tryout_bayar', $data);
 }

 function nilai_bayar(){
  $this->cek_session();
  $this->load->view('Nilai_bayar');
 }

 function soal_bayar(){
	 $this->cek_session();
	 $id = $this->input->post('id');
	 $idTo = $this->input->post('idTo');
	 $data['idTrans'] = $this->input->post('idTrans');
	 $data['mapel_id'] = $this->input->post('id');
	 $data['to_id'] = $this->input->post('idTo');
	 $data['nama_mapel'] = $this->Model_berbayar->tampil_soal_tryout($id)->row();
	 $data['soal'] = $this->Model_berbayar->tampil_soal_tryout($id)->result();
	 $this->load->view('Soal_Tryout_bayar', $data);
 }

 function cekJawaban_bayar(){
	 // array jawaban peserta
	 	$data = $this->input->post('pil');
  	$idMapel = $this->input->post('idMapel');
  	$idTo = $this->input->post('idTo');
  	$idTrans = $this->input->post('idTrans');
 	// array jawaban dari database
 	$result = $this->Model_berbayar->jawaban_soal_tryout($idMapel);
 	// echo var_dump($result);
 	$benar=0;
 	$salah=0;
 	$koreksi=array();
 	$idSalah = array();
 	for ($i=0; $i <sizeOf($result) ; $i++) {
 				$id = $result[$i]['id_soal'];
 				// $data[$id];
 				if (!isset($data[$id])) {
 					$salah++;
 					$koreksi[]=$result[$i]['id_soal'];
 					$idSalah[] = $i;
 				}else if($data[$id] == $result[$i]['jawaban_soal']){
 					$benar++;
 				}else{
 					$salah++;
 					$koreksi[]=$result[$i]['id_soal'];
 					$idSalah[] = $i;
 				}
 	}
 	$hasilnya['salah'] = $salah;
 	$hasilnya['benar'] = $benar;
 	$hasilnya['total'] = $benar*10;

	$user = $this->session->userdata('user_data');
	$nilai['id_peserta'] = $user['id_peserta'];
	$nilai['id_transaksi'] = $idTrans;
	$nilai['id_prodi'] = '1';
	$nilai['jmlh_benar'] = $hasilnya['benar'];
	$nilai['jmlh_salah'] = $hasilnya['salah'];
	$nilai['total_nilai'] = $hasilnya['total'];
	$this->Model_berbayar->insertNilai($nilai);

 	$this->load->view('Result_Tryout_bayar', $hasilnya);
 }


 function kumpulan_soal_bayar(){
	$this->cek_session();
	$this->load->view('Soal_bayar');
 }

 function pembahasan_bayar(){
 $this->cek_session();
 $this->load->view('Pembahasan_bayar');
 }


}
