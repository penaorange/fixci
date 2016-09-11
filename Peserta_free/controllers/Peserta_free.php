<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Peserta_free extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('l_admin');
		$this->load->helper('url');
		$this->load->model('Model_free');
		$this->load->library('pagination');

		$user = $this->session->userdata('user_data');
		if ($user['konfirmasi'] != '1' || !$user) {
			return false;
			redirect(site_url('Login'));
		}
		if ($user['id_kelompok_peserta'] != '1') {
			return false;
			redirect(site_url('Login'));
		}
	}


	public function index(){
		//pengecekan session peserta free
		$user = $this->session->userdata('user_data');
		if($user['id_kelompok_peserta'] == '1') {
			$this->load->view('Halaman_peserta_free');
		}else{
			redirect(site_url('Login'));
		}

	}

	public function cek_session(){
		//pengecekan session peserta free
		$user = $this->session->userdata('user_data');
		if($user['id_kelompok_peserta'] != '1') {
			redirect(site_url('Login'));
		}else{
			return TRUE;
		}

	}


	function profil_free(){
		$this->cek_session();
		$user = $this->session->userdata('user_data');
		$id_profil['id_peserta'] = $user['id_peserta'];
		$data_p['profil_lengkap'] = $this->Model_free->select_profil($id_profil)->row();
		$this->load->view('Profil_free', $data_p);
	}

	 function free(){
		$this->cek_session();
		$this->load->view('Halaman_peserta_free');
	}

	 function tryout_free(){
		// $this->M_peserta->lihatPeserta($id, $data);
		$this->cek_session();
		$user = $this->session->userdata('user_data');
		$id['to_kk']=$user['id_kelompok_keilmuan'];
		$id['to_kp']=$user['id_kelompok_peserta'];
		$data['tryout'] = $this->Model_free->select_tryout($id)->result();
		// $data['pelajaran'] = $this->Model_free->select_mapel($id_profil)->result();
		$this->load->view('Tryout_free', $data);
	}

  function detail_tryout_free(){
   $this->cek_session();
	 $user = $this->session->userdata('user_data');
	 $id_kp = $user['id_kelompok_peserta'];
	 $id_kk = $user['id_kelompok_keilmuan'];
   $id_try = $this->uri->segment(2);
   $data['detail_tryout'] = $this->Model_free->select_detail_tryout($id_try, $id_kk, $id_kp)->result();
   $this->load->view('Detail_Tryout_free', $data);
  }

	function soal_free(){
	 $this->cek_session();
	 $id = $this->input->post('id');
	 $idTo = $this->input->post('idTo');
	 $data['idTrans'] = $this->input->post('idTrans');
	 $data['mapel_id'] = $this->input->post('id');
	 $data['to_id'] = $this->input->post('idTo');
	 $data['nama_mapel'] = $this->Model_free->tampil_soal_tryout($id)->row();
	 $data['soal'] = $this->Model_free->tampil_soal_tryout($id)->result();
	 $this->load->view('Soal_Tryout_free', $data);
	}

function cekJawaban_free(){
	// array jawaban peserta
	$data = $this->input->post('pil');
	$idMapel = $this->input->post('idMapel');
	$idTo = $this->input->post('idTo');
	$idTrans = $this->input->post('idTrans');
	// array jawaban dari database
	$result = $this->Model_free->jawaban_soal_tryout($idMapel);
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

	$lihatNilai = $this->Model_free->lihatNilai($nilai);
	$this->Model_free->insertNilai($nilai);
	$this->load->view('Result_Tryout_free', $hasilnya);

}



}