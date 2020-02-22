<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller
{
	function __construct(){

		parent::__construct();
		$this->load->model('model_pesanan');
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
		$this->load->view('daftarAdm');
	}

	public function daftarAdmin(){
		$username = $this->input->post('username');
		$email 	  = $this->input->post('email');
		$pas 	  = md5($this->input->post('pas'));

		$data 	  = array(
			'username'		=> $username,
			'email'			=> $email,
			'pas'			=> $pas);

		$this->load->view('daftarAdm');
		$this->model_admin->input_data($data, 'admin');
		redirect('Web/content');
	}

	public function masuk()
	{
		$this->load->view('headerweb');
		$this->load->view('Login2');
	}

	public function prosesMasuk()
	{
		$username = $this->input->post('username'); 
        $pas      = md5($this->input->post('password')); 

        $login = $this->model_admin->cek_user($username, $password); 

        if (empty($login)) {
           $this->session->set_flashdata('gagal', 'Username atau Password Yang Anda Masukkan Salah!'); 
            redirect('website/masuk'); 
           
        } else {
            if($login){
                $session = array( 
                  'username'=>$login->username,
                  'status' => 'login'
               );
               $this->session->set_userdata($session);
               redirect('website/');
        	} 
    	} 
	}

	public function contentwebent()
	{
		if ($this->session->userdata('status') != 'login'){
			$this->load->view('headerweb');
		}else{
			$this->load->view('header');
		}
		$this->load->view('contentweb');
		$this->load->view('footerweb');
	}

	public function pelanggan(){
		if($this->session->userdata('status') != 'login'){
			redirect(base_url('index.php/Web/masuk'));
		}
		$id_pelanggan 		= $this->input->post('id_pelanggan');
		$nama_pelanggan 	= $this->input->post('nama_pelanggan');
		$alamat_pelanggan 	= $this->input->post ('alamat_pelanggan');
		$no_telp_pelanggan 	= $this->input->post('no_telp_pelanggan');

		$data = array(
			'id_pelanggan' 		=> $id_pelanggan,
			'nama_pelanggan' 	=> $nama_pelanggan,
			'alamat_pelanggan' 	=> $alamat_pelanggan,
			'no_telp_pelanggan' => $no_telp_pelanggan);

		$this->model_pesanan->input_data($data, 'pelanggan');
		redirect('Web/index');
	}
	
	public function pesanan()
	{
		// if ($this->session->userdata('status') != 'login'){
		// 	redirect(base_url('index.php/Web/masuk'));
		// }
		$this->load->view('header');
		$this->load->view('inputkonsumen');
		$this->load->view('footerweb');

	}

	public function delete()
	{
		$id_pesanan = $_GET['id_pesanan'];
		echo $idproduk;
		$hapus = "DELETE FROM detail_pesanan WHERE id_pesanan='$id_pesanan'";
		mysqli_query($conn, $hapus);

		if ($conn->query($hapus) === TRUE) {
		    echo "Data berhasil dihapus";
		    header("Location:view_pesanan.php");
		} else {
		    echo "Error: ".$conn->error;
		}
	}


	public function nota(){
		// if ($this->session->userdata('status') != 'login'){
		// 	redirect(base_url('index.php/Web/masuk'));
		// }
		$this->load->view('getidpelanggan');
		$konsumen = $this->input->post('id_pesanan');
		// $konsumen = $data['id_pesanan'];
		$data['detail_pesanan'] = $this->model_pesanan->cetak_nota($konsumen);
		$this->load->view('nota', $data);
	}

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
