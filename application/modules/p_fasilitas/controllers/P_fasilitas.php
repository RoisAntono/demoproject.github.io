<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_fasilitas extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_fasilitas');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{

		if ( empty( $this->session->userdata('session_id') ) )
		{
			redirect('login');

		} else {

			//$idfasilitasx = $this->m_fasilitas->idfasilitas('id_fasilitas');

			$data = array(
			'namamodule' 	=> "p_fasilitas",
			'namafileview' 	=> "V_fasilitas",
			'tampil'		=> $this->m_fasilitas->tampil(),
			'tampiledit'	=> $this->m_fasilitas->tampiledit('id_fasilitas'),
		);
		echo Modules::run('template/tampilAdmin', $data);
		}

	}

	
	function tambah()
	{
		$this->m_fasilitas->tambah();
		redirect('p_fasilitas');
	}

	function edit()
	{
		$this->m_fasilitas->edit();
		redirect('p_fasilitas');
	}

	function hapus($id)
	{
		$this->m_data_sekolah->hapus($id);
		redirect('data_sekolah');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "data_sekolah",
			'namafileview' 	=> "V_data_sekolah",
			'tampil'		=> $this->m_data_sekolah->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 