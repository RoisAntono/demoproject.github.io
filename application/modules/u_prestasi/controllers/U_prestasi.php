<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class U_prestasi extends MX_Controller {

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
			'namamodule' 	=> "u_prestasi",
			'namafileview' 	=> "V_prestasi",
		);
		echo Modules::run('template/tampilUser2', $data);


	}
	
}