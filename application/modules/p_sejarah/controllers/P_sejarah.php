<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_sejarah extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_sejarah');
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
			'namamodule' 	=> "p_sejarah",
			'namafileview' 	=> "V_sejarah",
			'tampil'		=> $this->m_sejarah->tampil(),
		);
		echo Modules::run('template/tampilAdmin', $data);
		}


	}

	function editview($id)
	{
		
		$data = array(
			'namamodule' 	=> "p_sejarah",
			'namafileview' 	=> "V_esejarah",
			'tampil'		=> $this->m_sejarah->tampiledit($id),
		);
		echo Modules::run('template/tampilAdmin', $data);
	}



	function edit()
	{
		$this->m_sejarah->edit();
		redirect('p_sejarah');
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
 