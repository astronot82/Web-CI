<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

/**
 * 
 */
class mhasiswa extends CI_Controller
{
	
	public function index()
	{
		$data['nama_lenkap'] = "Aja";
		$data['nim'] = 1810;
		$mahasiswa[0] =  array(
			'nim' => 12345,
			'nama' => "Dobleh" 
		);

		$data ['mahasiswa'] = $mahasiswa;

		$this->load->view('mahasiswa_index', $data);
	}

	public function tambah()
	{
		$this->load->view('mahasiswa_tambah');
	}
}