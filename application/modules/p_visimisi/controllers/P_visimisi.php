<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_visimisi extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_visimisi');
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
			'namamodule' 	=> "p_visimisi",
			'namafileview' 	=> "V_visimisi",
			'tampil'		=> $this->m_visimisi->tampil(),
		);
		echo Modules::run('template/tampilAdmin', $data);
		}

	}

	function editview($id)
	{
		
		$data = array(
			'namamodule' 	=> "p_visimisi",
			'namafileview' 	=> "V_evisimisi",
			'tampil'		=> $this->m_visimisi->tampiledit($id),
		);
		echo Modules::run('template/tampilAdmin', $data);
	}



	function edit()
	{
		$this->m_visimisi->edit();
		redirect('p_visimisi');
	}
	
}
 