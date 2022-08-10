<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_prestasisiswa extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_prestasi');
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
			'namamodule' 	=> "p_prestasisiswa",
			'namafileview' 	=> "V_prestasi",
			'tampil'		=> $this->m_prestasi->tampil(),
		);
		echo Modules::run('template/tampilAdmin', $data);
		}

	}
	
	// Tambah
	function tambahview()
	{

			$data = array(
			'namamodule' 	=> "p_prestasisiswa",
			'namafileview' 	=> "V_tprestasi",
		);
		echo Modules::run('template/tampilAdmin', $data);

	}

	// Tambah
	function detailview($id)
	{

			$data = array(
			'namamodule' 	=> "p_prestasisiswa",
			'namafileview' 	=> "V_dprestasi",
			'tampil'		=> $this->m_prestasi->tampildetail($id),
		);
		echo Modules::run('template/tampilAdmin', $data);

	}

	// Edit
	function editview($id)
	{
		
		$data = array(
			'namamodule' 	=> "p_prestasisiswa",
			'namafileview' 	=> "V_eprestasi",
			'tampil'		=> $this->m_prestasi->tampiledit($id),
		);
		echo Modules::run('template/tampilAdmin', $data);
	}

	function tambah()
	{
		$this->m_prestasi->tambah();
		redirect('p_prestasisiswa');
	}

	function edit()
	{
		$this->m_prestasi->edit();
		redirect('p_prestasisiswa');
	}

	function hapus()
	{
		$this->m_prestasi->hapus();
		redirect('p_prestasisiswa');
	}
	
}
 