<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dataguru extends CI_Model {

	function tampil()
	{
		return $this->db->get('dataguru')->result();
	}

	function tambah()
	{
		$nama 			= $this->input->post('nama');
		$jeniskelamin 	= $this->input->post('jeniskelamin');
		$jabatan 		= $this->input->post('jabatan');
		$mapel 			= $this->input->post('mapel');
		$email 			= $this->input->post('email');

				$data = array(
					'nama'			=> $nama,
					'jeniskelamin'	=> $jeniskelamin,
					'jabatan'		=> $jabatan,
					'mapel'			=> $mapel,
					'email'			=> $email,
				);
				$this->db->insert('dataguru', $data);

	}

	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_guru', $id)->delete('dataguru');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_sekolah',$cari)->get('sekolah')->result();
	}
}