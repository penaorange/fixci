<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Peserta_bimbel extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('l_admin');
		$this->load->helper('url');
		$this->load->model('Model_bimbel');
		$this->load->library('pagination');

		$user = $this->session->userdata('user_data');
		if ($user['konfirmasi'] != '1' || !$user) {
			return false;
			redirect(site_url('Login'));
		}
		if ($user['id_kelompok_peserta'] != '3') {
			return false;
			redirect(site_url('Login'));
		}
	}

	public function index(){
		//pengecekan session peserta bimbel
		$user = $this->session->userdata('user_data');
		if($user['id_kelompok_peserta'] == '3') {
			$this->load->view('Halaman_peserta_bimbel');
		}else{
			redirect(site_url('Login'));
		}

	}

	public function cek_session(){
		//pengecekan session peserta bayar
		$user = $this->session->userdata('user_data');
		if($user['id_kelompok_peserta'] != '3') {
			redirect(site_url('Login'));
		}else{
			return TRUE;
		}

	}

	function profil_bimbel(){
		$this->cek_session();
		$user = $this->session->userdata('user_data');
		$id_profil['id_peserta'] = $user['id_peserta'];
		$data_p['profil_lengkap'] = $this->Model_bimbel->select_profil($id_profil)->row();
		$this->load->view('Profil_bimbel', $data_p);	}

	 function bimbel(){
		 $this->cek_session();
		 $this->load->view('Halaman_peserta_bimbel');
	}

  function tryout_bimbel(){
	 $this->cek_session();
	 $user = $this->session->userdata('user_data');
	 $id['to_kk']=$user['id_kelompok_keilmuan'];
	 $id['to_kp']=$user['id_kelompok_peserta'];
	 $data['tryout'] = $this->Model_bimbel->select_tryout($id)->result();
	 // $data['pelajaran'] = $this->Model_free->select_mapel($id_profil)->result();
	 $this->load->view('Tryout_bimbel', $data);
 }

 function detail_tryout_bimbel(){
	$this->cek_session();
	$user = $this->session->userdata('user_data');
	$id_kp = $user['id_kelompok_peserta'];
	$id_kk = $user['id_kelompok_keilmuan'];
	$id_try = $this->uri->segment(2);
	$data['detail_tryout'] = $this->Model_bimbel->select_detail_tryout($id_try, $id_kk, $id_kp)->result();
	$this->load->view('Detail_Tryout_bimbel', $data);
 }

 function nilai_bimbel(){
  $this->cek_session();
  $this->load->view('Nilai_bimbel');
 }

 function soal_bimbel(){
	 $this->cek_session();
 	$id = $this->input->post('id');
 	$idTo = $this->input->post('idTo');
 	$data['idTrans'] = $this->input->post('idTrans');
 	$data['mapel_id'] = $this->input->post('id');
 	$data['to_id'] = $this->input->post('idTo');
	$data['nama_mapel'] = $this->Model_bimbel->tampil_soal_tryout($id)->row();
	$data['soal'] = $this->Model_bimbel->tampil_soal_tryout($id)->result();
	$this->load->view('Soal_Tryout_bimbel', $data);
 }

 function kumpulan_soal_bimbel(){
 $this->cek_session();
 $this->load->view('Soal_bimbel');
 }

 function pembahasan_bimbel(){
 $this->cek_session();
 $this->load->view('Pembahasan_bimbel');
 }

 function cekJawaban_bimbel(){
	 // array jawaban peserta
 	$data = $this->input->post('pil');
 	$idMapel = $this->input->post('idMapel');
 	$idTo = $this->input->post('idTo');
 	$idTrans = $this->input->post('idTrans');
 	// array jawaban dari database
 	$result = $this->Model_bimbel->jawaban_soal_tryout($idMapel, $idTo);
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
 				}else if($data[$id] == $result[$i]['jawaban_benar']){
 					$benar++;
 				}else{
 					$salah++;
 					$koreksi[]=$result[$i]['id_soal'];
 					$idSalah[] = $i;
 				}
 	}
 //	echo "<script> alert('Jumlah Salah = $salah'); </script>";
 	// echo "jumlah salah = ".$salah."<br/>";
 	// echo "jumlah benar = ".$benar."<br/>";
 	// echo "Total nilai = ".$benar*10;
 	// echo "<br>";
 	// for ($k=0; $k <sizeOf($koreksi) ; $k++) {
 	// 	echo "yang salah adalah id ".$koreksi[$k]."dengan jawaban aslinya ".$result[$idSalah[$k]]['jawaban_benar']."<br>";
 //}
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
	$this->Model_bimbel->insertNilai($nilai);

 	$this->load->view('Result_Tryout_bimbel', $hasilnya);
 	// echo var_dump($koreksi)." koreksi<br><br>";
 	// echo var_dump($data)." pilihan user<br><br>";
 	// echo var_dump($result)." kunci jawaban <br><br>";
 }

}
