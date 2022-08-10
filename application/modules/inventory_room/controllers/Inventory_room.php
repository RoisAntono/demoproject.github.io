<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory_room extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_inventory_room');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "inventory_room",
			'namafileview' 	=> "V_inventory_room",
			'tampil'		=> $this->M_inventory_room->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "inventory_room",
			'namafileview' 	=> "V_room_tambah",
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "inventory_room",
			'namafileview' 	=> "V_room_edit",
			'tampil'		=> $this->M_inventory_room->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_inventory_room->tambah();
		redirect('inventory_room');
		
		//redirect('inventory_room');
	}

	function edit()
	{
		$this->M_inventory_room->edit();
		redirect('inventory_room');
	}

	function hapus()
	{
		$this->M_inventory_room->hapus();
		redirect('inventory_room');
	}
	
}
 