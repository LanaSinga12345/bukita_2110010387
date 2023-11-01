<?php

class About extends Controller
{
	public function __construct()
	{
		if ($_SESSION['session_login'] != 'sudah_login') {
			Flasher::setMessage('Login', 'Tidak ditemukan.', 'danger');
			header('location:' . base_url . '/login');
			exit;
		}
	}


	public function index()
	{
		$data['title'] = 'Halaman About Me';
		$data['nama'] = 'Ahmad Maulana';
		$data['npm'] = '2110010387';
		$data['alamat'] = 'Jln. A.Yani km 8';
		$data['no_hp'] = '08******';

		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('about/index', $data);
		$this->view('templates/footer');
	}
}
