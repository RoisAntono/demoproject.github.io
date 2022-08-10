<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_sejarah extends CI_Model {

	function tampil()
	{
		return $this->db->get('sejarah')->result();
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_sejarah',$idnya);
    	return $this->db->get('sejarah')->row_array();
	}

	function edit()
	{
		$id 		= $this->input->post('id');
		$sejarah 	= $this->input->post('sejarah');

				$data = array(
					'sejarah'		=> $sejarah,
				);
				$this->db->where('id_sejarah',$id)->update('sejarah', $data);

	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_sekolah',$cari)->get('sekolah')->result();
	}
}