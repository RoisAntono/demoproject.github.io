<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class U_guru extends MX_Controller {

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
			'namamodule' 	=> "u_guru",
			'namafileview' 	=> "V_guru",
		);
		echo Modules::run('template/tampilUser2', $data);


	}

}
 