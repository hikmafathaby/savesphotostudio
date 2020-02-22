<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_konsumen extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('model_pesanan');
		$this->load->model('model_konsumen');
	}

	public function actiondata()
	{
		$id_pesanan 	= $this->input->post('id_pesanan');
		$id_pelanggan	= $this->input->post('id_pelanggan');
		$konsumen 		= $this->input->post('nama_pelanggan');
		$alamat 		= $this->input->post('alamat_pelanggan');
		$telp 			= $this->input->post('no_telp_pelanggan');
	
		$tanggalmasuk 	= $this->input->post('tanggal_masuk');
		$tanggalselesai	= $this->input->post('tanggal_selesai');
		$jamfoto		= $this->input->post('jam_foto');
		// if ($tanggalkeluar < $tanggalmasuk) {
		// 	echo "Tanggal keluar tidak bisa kurang dari tanggal masuk";
		// } else {

		// }
		$id_karyawan 	= $this->input->post('id_karyawan');
		$id_paket		= $this->input->post('id_paket');
		$paket 			= $this->input->post('paket');
		$jenis 			= $this->input->post('jenis');
		$qty			= $this->input->post('qty');
		$harga			= $this->input->post('harga');
		$data 			= array (
							'id_pesanan' 		=> $id_pesanan,
							'nama_pelanggan' 	=> $konsumen,
							'alamat_pelanggan' 	=> $alamat,
							'no_telp_pelanggan' => $telp,
							'tanggal_masuk' 	=> $tanggalmasuk,
							'tanggal_selesai' 	=> $tanggalselesai,
							'jamfoto'			=> $jamfoto,
							'paket' 			=> $paket,
							'jenis' 			=> $jenis

			);
		$this->model_pesanan->input_data($data, 'detail_pesanan');
		redirect('Web/nota');

	}

	public function daftarPesanan()
	{
		if ($this->session->userdata('status') != 'login'){
			redirect(base_url('index.php/Web/masuk'));
		}else{
			$this->load->view('header');
		}
		$data['pesanan'] = $this->model_pesanan->list_daftarPesanan();
		$this->load->view('view_pesanan', $data);
		$this->load->view('footerweb');
	}

	public function regis()
	{
		$this->load->view('headerweb');
		$this->load->view('register2');
	}

	public function masuk()
	{
		$this->load->view('headerweb');
		$this->load->view('Login2');
	}

	public function prosesMasuk()
	{
		$username = $this->input->post('email'); 
        $password = md5($this->input->post('password')); 

        $login = $this->model_admin->cek_user($username, $password); 

        if (empty($login)) {
           $this->session->set_flashdata('gagal', 'Username atau Password Yang Anda Masukkan Salah!'); 
            redirect('Web/masuk'); 
           
        } else {
            if($login){
                $session = array( 
                  'username'=>$login->email,
                  'status' => 'login'
               );
               $this->session->set_userdata($session);
               redirect('Web/content');
        	} 
    	} 
	}

	public function content() 
	{
		if ($this->session->userdata('status') != 'login'){
			$this->load->view('headerweb');
		}else{
			$this->load->view('header');
		}
		$this->load->view('contentwebkon');
		$this->load->view('footerweb');
	}

	public function pesanan()
	{
		if ($this->session->userdata('status') != 'login'){
			redirect(base_url('index.php/Web/masuk'));
		}
		$this->load->view('header');
		$this->load->view('inputkonsumen');
		// $this->load->view('inputpesanan');
		// $this->load->view('totalbayar');
		$this->load->view('footerweb');

	}

	// public function nota(){
	// 	if ($this->session->userdata('status') != 'login'){
	// 		redirect(base_url('index.php/Web/masuk'));
	// 	}
	// 	$konsumen = $this->input->post('nama_pelanggan');.
	// 	$data['detail_pesanan'] = $this->model_pesanan->cetak_nota($konsumen);
	// 	$this->load->view('nota', $data);
	// }

	// public function prosespemesanan(){
	// 	$id_pesanan 	= $this->input->post('id_pesanan');
	// 	$konsumen 		= $this->input->post('nama_pelanggan');
	// 	$alamat 		= $this->input->post('alamat_pelanggan');
	// 	$telp 			= $this->input->post('no_telp_pelanggan');
		
	// 	$tanggalmasuk 	= $this->input->post('tanggal_masuk');
	// 	$tanggalkeluar	= $this->input->post('tanggal_selesai');
	// 	// if ($tanggalkeluar < $tanggalmasuk) {
	// 	// 	echo "Tanggal keluar tidak bisa kurang dari tanggal masuk";
	// 	// } else {

	// 	// }
		
	// 	$paket 			= $this->input->post('paket');
	// 	$jenis 			= $this->input->post('jenis');
	// 	$data 			= array (
	// 						'id_pesanan' 		=> $id_pesanan,
	// 						'nama_pelanggan' 	=> $konsumen,
	// 						'alamat_pelanggan' 		=> $alamat,
	// 						'no_telp_pelanggan' 		=> $telp,
	// 						'tanggal_masuk' 	=> $tanggalmasuk,
	// 						'tanggal_selesai' => $tanggalkeluar,
	// 						'paket' 		=> $paket,
	// 						'jenis' 		=> $jenis

	// 		);
	// 	$this->model_admin->input_data($data, 'data');
	// 	redirect('Web/nota');

	// }

	public function reserv(){
		if ($this->session->userdata('status') != 'login'){
			redirect(base_url('index.php/Web/masuk'));
		}
		$this->load->view('header');
		$this->load->view('reservasikon');
		$this->load->view('footerweb');
	}

	public function worker(){
		if ($this->session->userdata('status') != 'login'){
			$this->load->view('headerweb');
		}else{
			$this->load->view('header');
		}
		$this->load->view('Team2');
		$this->load->view('footerweb');

	}

	public function contactus(){
		if ($this->session->userdata('status') != 'login'){
			$this->load->view('headerweb');
		}else{
			$this->load->view('header');
		}
		$this->load->view('contactus');
		$this->load->view('footerweb');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('index.php/Web/masuk'));
	}
}

?>

