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
		//pengecekan session peserta bimbel
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
		$this->load->view('Profil_bimbel', $data_p);
	}

	function ubah_profil(){
		$this->cek_session();
		$user = $this->session->userdata('user_data');
		$where['id_peserta'] = $user['id_peserta'];

		// $data = $this->input->post(null, true);
		$datas = $this->input->post(null, true);
		$data = html_escape($datas);

		$simpanProfil = $this->Model_bimbel->ubah_profil($data, $where);
		$this->session->set_flashdata('notif_berhasil', 'Profil Berhasil Diubah.');
		redirect(site_url('profil-bimbel'));
	}

	 function bimbel(){
		 $this->cek_session();
		 $this->load->view('Halaman_peserta_bimbel');
	}

	function ubah_password(){
		$this->cek_session();
		$user = $this->session->userdata('user_data');
		$where['id_peserta'] = $user['id_peserta'];

		$pass = $this->input->post(null, true);
		$data = html_escape($pass);

		$lihatProfil = $this->Model_bimbel->select_profil($where)->row_array();
		if (md5($data['passLama']) != $lihatProfil['password']) {
				$this->session->set_flashdata('notif_gagal', 'Gagal Mengubah Password. Password Lama Salah.');
				redirect(site_url('profil-bimbel'));
				return false;
		}else {
			// unset($data['passLama']);
			// unset($data['passBaru']);
			if ($data['password'] != $data['passBaru']) {
				$this->session->set_flashdata('notif_gagal', 'Konfirmasi Password Salah.');
				redirect(site_url('profil-bimbel'));
				return false;
				}
			if ($data['password'] == $data['passLama']) {
				$this->session->set_flashdata('notif_gagal', 'Maaf. Password Yang Sama Tidak Dapat Digunakan.');
				redirect(site_url('profil-bimbel'));
				return false;
			}
				$dataBaru['password'] = md5($data['password']);
				$this->Model_bimbel->ubah_profil($dataBaru, $where);
				$this->session->set_flashdata('notif_berhasil', 'Password Berhasil Diubah.');
				redirect(site_url('profil-bimbel'));
			}
		}

  function tryout_bimbel(){
		$this->cek_session();
		$user = $this->session->userdata('user_data');
		$id['to_kk']=$user['id_kelompok_keilmuan'];
		$id['to_kp']=$user['id_kelompok_peserta'];
		$data['tryout'] = $this->Model_bimbel->select_tryout($id)->result();
		$this->load->view('Tryout_bimbel', $data);
 }

 function detail_tryout_bimbel(){
	 $this->cek_session();
	 $user = $this->session->userdata('user_data');
	 $id_kp = $user['id_kelompok_peserta'];
	 $id_kk = $user['id_kelompok_keilmuan'];
   $id_try = $this->uri->segment(2);
	 $where['id_peserta'] = $user['id_peserta'];
	 $where['id_tryout'] = $id_try;
   $data['detail_tryout'] = $this->Model_bimbel->select_detail_tryout($id_try, $id_kk, $id_kp)->result();
	 $data['hasil_nilai'] = $this->Model_bimbel->lihatNilai($where)->result();
   $this->load->view('Detail_Tryout_bimbel', $data);
 }

 function nilai_bimbel(){
	 $this->cek_session();
	 $user = $this->session->userdata('user_data');
	 $id['id_peserta']=$user['id_peserta'];
	 $data['nilai'] = $this->Model_bimbel->select_nilai_tryout($id)->result();
	 // $data['pelajaran'] = $this->Model_free->select_mapel($id_profil)->result();
	 $this->load->view('Nilai_bimbel', $data);
 }

 function soal_bimbel(){
	 $this->cek_session();
	 $id = $this->input->post('id');
	 $idTo = $this->input->post('idTo');
	 $data['waktu'] = $this->input->post('waktu');
	 $data['idTrans'] = $this->input->post('idTrans');
	 $data['mapel_id'] = $this->input->post('id');
	 $data['to_id'] = $this->input->post('idTo');
	 $data['nama_mapel'] = $this->Model_bimbel->tampil_soal_tryout($id)->row();
	 $data['soal'] = $this->Model_bimbel->tampil_soal_tryout($id)->result();
	 $this->load->view('Soal_Tryout_bimbel', $data);
 }

 function cekJawaban_bimbel(){
	 // array jawaban peserta
 	$data = $this->input->post('pil');
 	$idMapel = $this->input->post('idMapel');
 	$idTo = $this->input->post('idTo');
 	$idTrans = $this->input->post('idTrans');
 	// array jawaban dari database
 	$result = $this->Model_bimbel->jawaban_soal_tryout($idMapel);
 	// echo var_dump($result);
 	$benar=0;
 	$salah=0;
 	$kosong=0;
 	$koreksi=array();
 	$idSalah = array();
 	for ($i=0; $i <sizeOf($result) ; $i++) {
 				$id = $result[$i]['id_soal'];
 				// $data[$id];
 				if (!isset($data[$id])) {
 					$kosong++;
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
 	$hasilnya['kosong'] = $kosong;
 	$hasilnya['salah'] = $salah;
 	$hasilnya['benar'] = $benar;
 	$hasilnya['total'] = ($benar*4)+($salah*-1)+($kosong*0);

 	$user = $this->session->userdata('user_data');
 	$nilai['id_peserta'] = $user['id_peserta'];
 	$nilai['id_tryout'] = $idTo;
 	$nilai['id_mapel'] = $idMapel;
 	// $nilai['id_transaksi'] = $idTrans;
 	// $nilai['id_prodi'] = '1';
 	$nilai['jmlh_kosong'] = $hasilnya['kosong'];
 	$nilai['jmlh_benar'] = $hasilnya['benar'];
 	$nilai['jmlh_salah'] = $hasilnya['salah'];
 	$nilai['total_nilai'] = $hasilnya['total'];

 	$lihatNilai = $this->Model_bimbel->lihatNilai($nilai);
 	$this->Model_bimbel->insertNilai($nilai);
 	$this->load->view('Result_Tryout_bimbel', $hasilnya);
}

 function kumpulan_soal_bimbel(){
 $this->cek_session();
 $this->load->view('Soal_bimbel');
 }

 function universitas_bimbel(){
 $this->cek_session();
 $data['univ'] = $this->Model_bimbel->tampil_univ()->result();
 $this->load->view('Universitas_bimbel', $data);
 }

}
