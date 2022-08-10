<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_visimisi extends CI_Model {

	function tampil()
	{
		return $this->db->get('visimisi')->result();
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_visimisi',$idnya);
    	return $this->db->get('visimisi')->row_array();
	}

	function edit()
	{
		$id 		= $this->input->post('id');
		$visimisi 	= $this->input->post('visimisi');

				$data = array(
					'visimisi'		=> $visimisi,
				);
				$this->db->where('id_visimisi',$id)->update('visimisi', $data);

	}


	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_sekolah',$cari)->get('sekolah')->result();
	}
}