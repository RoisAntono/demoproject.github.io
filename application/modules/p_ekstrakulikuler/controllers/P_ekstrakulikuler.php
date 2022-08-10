<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_ekstrakulikuler extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('M_ekstrakulikuler');
		$this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "p_ekstrakulikuler",
			'namafileview' 	=> "V_ekstrakulikuler",
			'tampil'		=> $this->M_ekstrakulikuler->tampil(),
		);
		echo Modules::run('template/tampilAdmin', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "p_ekstrakulikuler",
			'namafileview' 	=> "V_ekstrakulikuler",
		);
		echo Modules::run('template/tampilAdmin', $data);
	}

		// halaman tambah
	function editview($id)
	{
		$data = array(
			'namamodule' 	=> "p_ekstrakulikuler",
			'namafileview' 	=> "V_ekstrakulikuler",
			'tampil'		=> $this->M_ekstrakulikuler->tampiledit($id),
		);
		echo Modules::run('template/tampilAdmin', $data);
	}

	function tambah()
	{

		$this->M_ekstrakulikuler->tambah();
		redirect('p_ekstrakulikuler');
		
	}

	function edit()
	{
		$this->M_ekstrakulikuler->edit();
		redirect('p_ekstrakulikuler');
	}

	function detail($id)
	{
		$data = array(
			'namamodule' 	=> "p_ekstrakulikuler",
			'namafileview' 	=> "V_detail",
			'tampil'		=> $this->M_ekstrakulikuler->tampildetail($id),
		);
		echo Modules::run('template/tampilAdmin', $data);
	}

	function hapus()
	{
		$this->M_ekstrakulikuler->hapus();
		redirect('p_ekstrakulikuler');
	}
	
}
