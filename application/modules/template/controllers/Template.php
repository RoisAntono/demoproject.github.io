<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MX_Controller {

	function __construct()
	{
		parent:: __construct();
		//load model

		$this->load->model('m_template');
		$this->load->model('login/m_session');
	}

	

	// view core Admin
	public function index_admin()
	{
		
		$this->load->view('view_template_admin');
	}

	public function tampilAdmin($data)
	{
		$id = $this->session->userdata('session_id');
		if (empty($this->session->userdata('session_id'))) 
		{
			redirect('login');
		}

		$data['nama'] = $this->m_template->oke($id);
		$this->load->view('view_template_admin',$data);
	}

	// view core User
	public function index_user()
	{
		
		$this->load->view('view_template_user');
	}

	public function tampilUser($data)
	{
		$id = $this->session->userdata('session_id');
		
		$this->load->view('view_template_user',$data);
	}

	// view core User
	public function index_user2()
	{
		
		$this->load->view('view_template_user2');
	}

	public function tampilUser2($data)
	{
		$id = $this->session->userdata('session_id');
		
		$this->load->view('view_template_user2',$data);
	}
	

}
