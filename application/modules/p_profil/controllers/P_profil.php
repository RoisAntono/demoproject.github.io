<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_profil extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_profil');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{

		if ( empty( $this->session->userdata('session_id') ) )
		{
			redirect('login');

		} else {
			$iduser = $this->session->userdata('session_id');
			$idlevel = $this->m_profil->ambillevel($iduser);

			$data = array(
			'namamodule' 	=> "p_profil",
			'namafileview' 	=> "V_profil",
			'idnya' 		=> $iduser,
			'idjabatan' 	=> $idlevel,
			'tampil'		=> $this->m_profil->tampil($iduser),
		);
		echo Modules::run('template/tampilAdmin', $data);
		}


	}

	function edit()
	{
		$this->m_profil->edit();
		redirect('p_profil');
	}

	function ubahpassword()
	{
		$this->m_profil->ubahpassword();
		redirect('p_profil');
	}


}
 