<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class website extends CI_Controller
{
	function __construct()
    {

		parent::__construct();
		$this->load->model('model_pesanan');
        $this->load->model('model_admin');
        $this->load->library('pdf');
        $this->load->library('form_validation');
        // $this->load->helper('url');
	}

    public function regis()
    {
        $this->load->view('headerweb');
        $this->load->view('daftarAdm');
    }

    public function daftarAdmin()
    {
        $username = $this->input->post('username');
        $email    = $this->input->post('email');
        $pas      = md5($this->input->post('pas'));

        $data     = array(
                            'username'      => $username,
                            'password'      => $pas,
                            'email'         => $email);
        
        $this->load->view('daftarAdm');
        $this->model_admin->input_data($data, 'user');

        redirect('website/index');
        // $cekAkun = $this->model_admin->cek_user($username, $email, $pas);

        // if (empty($cekAkun)) {
        //     $this->session->set_flashdata('Failed', 'This account has already exists.');
        //     redirect('daftarAdm');
        // } else {
        //     if ($cekAkun) {
        //         $session = array(
        //             'username' => $username,
        //             'status' => 'login'
        //         );
        //         $this->session->set_userdata($session);
        //         redirect('website/index');
        //     }
            
        // }
    }

    public function masuk()
    {
        $this->load->view('headerweb');
        $this->load->view('Login2');
    }

    public function prosesMasuk()
    {
        $username = $this->input->post('username'); 
        $password = md5($this->input->post('password'));

        $login = $this->model_admin->cek_user($username, $password)->row(); 

        if (empty($login)) {
            $this->session->set_flashdata('gagal', 'Username atau Password Yang Anda Masukkan Salah!'); 
            redirect('website/masuk'); 
           
        } else {
            if($login){
                $session = array( 
                  'username'=> $username,
                  'status' => 'login',
                  'jabatan' => $login->jabatan
                );
               $this->session->set_userdata($session);
               redirect('website/index');
            } 
        } 
    }

    public function index()
	{
        if ($this->session->userdata('status') != 'login'){
			$this->load->view('headerweb');
		}else{
			$this->load->view('header');
		}
		$this->load->view('website/index');
        $this->load->view('footerweb');
	}

    public function index_paket()
    {
        if ($this->session->userdata('status') != 'login'){
			$this->load->view('headerweb');
		}else{
			$this->load->view('header');
		}
        $data['paket'] = $this->model_pesanan->get('paket');
        // print_r($data);
        $this->load->view('website/index');
		$this->load->view('website/content', $data);
    }

    public function order()
    {
        if ($this->session->userdata('status') != 'login'){
			redirect(base_url('index.php/website/masuk'));
		}else{
			$this->load->view('header');
		}
        $data['paket'] = $this->model_pesanan->get('paket');
        $data['jenis'] = $this->model_pesanan->get('jenis_foto');
        $this->load->view('website/form_pesanan', $data);
    }

    public function actionorder()
    {
        if($this->session->userdata('status') != 'login'){
			redirect(base_url('index.php/website/masuk'));
		}
        // $id_karyawan        = $this->session->userdata('username');
        $nama_pelanggan     = $this->input->post('nama_pelanggan');
        $alamat_pelanggan   = $this->input->post('alamat_pelanggan');
        $no_telp_pelanggan  = $this->input->post('no_telp_pelanggan');
        $id_paket           = $this->input->post('paket');
        $id_jenis           = $this->input->post('jenis');
        $tanggalmasuk 	    = date('Y-m-d');
        $tanggalselesai 	= $this->input->post('tanggal_selesai');

        // $harga 	= $this->input->post('harga');

		$data = array(
            // 'id_karyawan'       => $id_karyawan,
            'id_paket'          => $id_paket,
			'nama_pelanggan' 	=> $nama_pelanggan,
			'alamat_pelanggan' 	=> $alamat_pelanggan,
			'no_telp_pelanggan' => $no_telp_pelanggan,
            'tanggal_masuk'     => $tanggalmasuk,
            'tanggal_selesai'   => $tanggalselesai,
            'paket'             => $id_paket,
            'jenis'             => $id_jenis,
            'qty'               => 1,
            // 'harga'             => NULL

        );
		
        $this->model_pesanan->input($data, 'detail_pesanan');
        redirect('website/showticket');
    }
    public function showticket(){
        $data['pesanan'] = $this->model_pesanan->get('detail_pesanan');
        $this->load->view('view_pesanan',$data);
        // $arrayName = array('id_pelanggan' => $id_pelanggan);
        // $this->session->userdata($arrayName);
        // redirect('website/nota');
    }
    public function nota()
    {
  //       if ($this->session->userdata('status') != 'login'){
		// 	$this->load->view('headerweb');
		// }else{
		// 	$this->load->view('header');
		// }
        $konsumen = $this->model_pesanan->getid();
        // $konsumen = $this->session->userdata('id_pelanggan');
        echo "<div class='container'>";
        echo "<hr>";
        echo "<div class='row'>";
        $atts = array(
            'width'       => 1000,
            'height'      => 600,
            'scrollbars'  => 'yes',
            'status'      => 'yes',
            'resizable'   => 'yes',
            'screenx'     => 0,
            'screeny'     => 0,
            'window_name' => 'Struk Pembayaran'
        );
        echo anchor_popup('website/actionnota', 'Click Me!', "class='btn btn-primary'", $atts);
        echo "</div>";
        echo "</div>";
        print_r($konsumen);
    }

    public function actionnota()
    {
        $konsumen = $this->session->userdata('nama_pelanggan');
        echo 'Hai, ' .$konsumen;
        $data['detail_pesanan'] = $this->model_pesanan->cetak_nota($konsumen);
		$this->load->view('nota', $data);
        print_r($data);
    }

    // public function listpesanan()
    // {
    //     if ($this->session->userdata('status') != 'login'){
    //         redirect(base_url('index.php/website/masuk'));
    //     }else{
    //         $this->load->view('header');
    //     }
    //     $data['pesanan'] = $this->model_pesanan->listpesanan();
    //     $this->load->view('view_pesanan', $data);
    //     $this->load->view('footerweb');
    // }
    
    public function delete($id_pesanan)
    {
        $where  = array('id_pesanan' => $id_pesanan);
        $this->model_pesanan->hapus_data($where, 'detail_pesanan');
        redirect('website/showticket');
    }

    public function edit($id_pesanan)
    {
        $where = array('id_pesanan' => $id_pesanan);
        $data['data'] = $this->model_pesanan->edit_data($where, 'detail_pesanan')->result();
        $this->load->view('edit_data', $data);
    }
    
    public function update()
    {
        if($this->session->userdata('status') != 'login') {
            redirect(base_url('index.php/website/masuk'));
        }

        $id_pesanan         = $this->input->post('id_pesanan');
        $id_pelanggan       = $this->input->post('id_pelanggan');
        $nama_pelanggan     = $this->input->post('nama_pelanggan');
        $alamat_pelanggan   = $this->input->post('alamat_pelanggan');
        $no_telp_pelanggan  = $this->input->post('no_telp_pelanggan');
        $tanggal_masuk      = $this->input->post('tanggal_masuk');
        $tanggal_selesai    = $this->input->post('tanggal_selesai');
        $paket              = $this->input->post('paket');
        $jenis              = $this->input->post('jenis');

        $data = array(
            'nama_pelanggan'    => $nama_pelanggan,
            'alamat_pelanggan'  => $alamat_pelanggan,
            'no_telp_pelanggan' => $no_telp_pelanggan,
            'tanggal_masuk'     => $tanggal_masuk,
            'tanggal_selesai'   => $tanggal_selesai,
            'paket'             => $paket,
            'jenis'             => $jenis
        );

        $where = array(
            'id_pesanan'      => $id_pesanan
        );

        $this->model_pesanan->update($where, $data, 'detail_pesanan');
        redirect('website/showticket');
    }

    // public function cetak()
    // {

    // }

    public function reserv(){
        if ($this->session->userdata('status') != 'login'){
            redirect(base_url('index.php/website/masuk'));
        } else {
            $this->load->view('header');
        }
        $data['pesanan'] = $this->model_pesanan->listpesanan();
        $this->load->view('view_pesanan', $data);
        $this->load->view('footerweb');
    }

    public function worker(){
        $this->load->view('header');

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

    public function report(){
        if ($this->session->userdata('status') != 'login') {
            $this->load->view('headerweb');
        } else {
            $this->load->view('header');
        }
        $this->load->view('report');
        
        // $pdf = new FPDP('l', 'mm', 'A5');
        // $pdf->AddPage();

        // //TITLE OF REPORT
        // $pdf->SetFont('Calibri', 'B', 16);
        // $pdf->Cell(190, 7, 'LAPORAN PEMASUKAN SAVES PHOTO STUDIO', 0, 1, 'C');

        // $pdf->Cell(10, 10, '', 0, 1);
        // $pdf->SetFont('Calibri', 'B', 12);
        // $pdf->Cell(10, 7,   'ID Pesanan', 1, 0, 'C');
        // $pdf->Cell(15, 7,   'ID Pelanggan', 1, 0, 'C');
        // $pdf->Cell(10, 7,   'ID Karyawan', 1, 0, 'C');
        // $pdf->Cell(8, 7,    'ID Paket', 1, 0, 'C');
        // $pdf->Cell(15, 7,   'Nama Pelanggan', 1, 0, 'C');
        // $pdf->Cell(20, 7,   'Alamat Pelanggan', 1, 0, 'C');
        // $pdf->Cell(8, 7,    'No. Telp', 1, 0, 'C');
        // $pdf->Cell(10, 7,   'Tanggal Masuk', 1, 0, 'C');
        // $pdf->Cell(10, 7,   'Tanggal Selesai', 1, 0, 'C');
        // $pdf->Cell(8, 7,    'Paket', 1, 0, 'C');
        // $pdf->Cell(8, 7,    'Jenis', 1, 0, 'C');
        // $pdf->Cell(5, 7,    'Qty', 1, 0, 'C');
        // $pdf->Cell(8, 7,    'Harga', 1, 0, 'C');
        // $pdf->SetFont('Calibri', '', 10);

        // // $pesanan = $this->db->get->('detail_pesanan')->result();
        // foreach ($pesanan as $dp) {
        //     $pdf->Cell(10, 7,   $dp->id_pesanan, 1, 0);
        //     $pdf->Cell(15, 7,   $dp->id_pelanggan, 1, 0);
        //     $pdf->Cell(10, 7,   $dp->id_karyawan, 1, 0);
        //     $pdf->Cell(8, 7,    $dp->id_paket, 1, 0);
        //     $pdf->Cell(15, 7,   $dp->nama_pelanggan, 1, 0);
        //     $pdf->Cell(20, 7,   $dp->alamat_pelanggan, 1, 0);
        //     $pdf->Cell(8, 7,    $dp->no_telp_pelanggan, 1, 0);
        //     $pdf->Cell(10, 7,   $dp->tanggal_masuk, 1, 0);
        //     $pdf->Cell(10, 7,   $dp->tanggal_selesai, 1, 0);
        //     $pdf->Cell(8, 7,    $dp->paket, 1, 0);
        //     $pdf->Cell(8, 7,    $dp->jenis, 1, 0);
        //     $pdf->Cell(5, 7,    $dp->qty, 1, 0);
        //     $pdf->Cell(8, 7,    $dp->harga, 1, 0);
        // }
        // $pdf->Output();

    }

    public function report1()
    {
        $data['link_admin']         = 'active';
        $config['base_url']         = base_url() . 'admin/user/';
        $config['total_rows']       = $this->model->get_table('t_user')->num_rows();
        $config['per_page']         = '10';
        $config['first_tag_open']   = '<li class="page-item">';
        $config['first_tag_close']  = '</li>';
        $config['last_tag_open']    = '<li class="page-item">';
        $config['last_tag_open']    = '</li>';
        $config['full_tag_open']    = '<div class="pagination pagination-sm m-0 float-right">';
        $config['full_tag_close']   = '</ul></div></div>';
        $config['num_tag_open']     = '<li class="page-item">';
        $config['num_tag_close']    = '</li>';
        $config['cur_tag_open']     = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close']    = '</a></li>';
        $config['next_link']        = '&rarr;';
        $config['next_tag_open']    = '<li class="page-item">';
        $config['next_tag_close']   = '</li>';
        $config['prev_link']        = '&larr;';
        $config['prev_tag_open']    = '<li class="page-item">';
        $config['prev_tag_close']   = '</li>';
        $this->pagination->initialize($config);
        $data['offset'] = $this->uri->segment(3);
        $data['query'] = $this->model->get_all_paginate('t_user','id',$config['per_page'], $this->uri->segment(3));
        $data['title']      = "Data User"; 
        $this->load->view('admin/primary/v_header',$data);
        $this->load->view('admin/v_user');
        $this->load->view('admin/primary/v_footer');
    
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('index.php/website/masuk'));
    }
}

?>