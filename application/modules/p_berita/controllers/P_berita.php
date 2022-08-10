<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_berita extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_berita');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{

		if ( empty( $this->session->userdata('session_id') ) )
		{
			redirect('login');

		} else {

			$data = array(
			'namamodule' 	=> "p_berita",
			'namafileview' 	=> "V_berita",
			'tampil'		=> $this->m_berita->tampil(),
		);
		echo Modules::run('template/tampilAdmin', $data);
		}

	}
	
	// Tambah
	function tambahview()
	{

			$data = array(
			'namamodule' 	=> "p_berita",
			'namafileview' 	=> "V_tberita",
		);
		echo Modules::run('template/tampilAdmin', $data);

	}

	// Tambah
	function detailview($id)
	{

			$data = array(
			'namamodule' 	=> "p_berita",
			'namafileview' 	=> "V_dberita",
			'tampil'		=> $this->m_berita->tampildetail($id),
		);
		echo Modules::run('template/tampilAdmin', $data);

	}

	// Edit
	function editview($id)
	{
		
		$data = array(
			'namamodule' 	=> "p_berita",
			'namafileview' 	=> "V_eberita",
			'tampil'		=> $this->m_berita->tampiledit($id),
		);
		echo Modules::run('template/tampilAdmin', $data);
	}

	function tambah()
	{
		$this->m_berita->tambah();
		redirect('p_berita');
	}

	function edit()
	{
		$this->m_berita->edit();
		redirect('p_berita');
	}

	function hapus()
	{
		$this->m_berita->hapus();
		redirect('p_berita');
	}
	
}
 