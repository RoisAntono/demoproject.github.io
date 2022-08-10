<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_dataguru extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_dataguru');
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
			'namamodule' 	=> "p_dataguru",
			'namafileview' 	=> "V_dataguru",
			'tampil'		=> $this->m_dataguru->tampil(),
		);
		echo Modules::run('template/tampilAdmin', $data);
		}


	}

	function tambah()
	{
		$this->m_dataguru->tambah();
		redirect('p_dataguru');
	}


	function hapus()
	{
		$this->m_dataguru->hapus();
		redirect('p_dataguru');
	}

	
}
 