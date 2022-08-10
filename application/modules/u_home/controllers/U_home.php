<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class U_home extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_beranda');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{

			$data = array(
			'namamodule' 	=> "u_home",
			'namafileview' 	=> "V_home",
		);
		echo Modules::run('template/tampilUser', $data);


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
 