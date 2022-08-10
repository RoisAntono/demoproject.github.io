<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_prestasi extends CI_Model {

	function tampil()
	{
		return $this->db->get('prestasi')->result();
	}

	function tampildetail($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_prestasi',$idnya);
    	return $this->db->get('prestasi')->row_array();
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_prestasi',$idnya);
    	return $this->db->get('prestasi')->row_array();
	}

	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_prestasi', $id)->delete('prestasi');
	}

	function tambah()
	{
		$nama_prestasi 		= $this->input->post('nama_prestasi');
		$deskripsi_prestasi	= $this->input->post('deskripsi_prestasi');


		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/admin/images/prestasi/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
		if($_FILES['foto_prestasi']['name'])
        {
            if ($this->upload->do_upload('foto_prestasi'))
            {
				$gbr = $this->upload->data();
				$data = array(
					'nama_prestasi'			=> $nama_prestasi,
					'deskripsi_prestasi'	=> $deskripsi_prestasi,
					'foto_prestasi' 		=> $gbr['file_name'],
					
					
				);
				$this->db->insert('prestasi', $data);
			
			}	 
		}
		else{
				$data = array(
					'nama_prestasi'			=> $nama_prestasi,
					'deskripsi_prestasi'	=> $deskripsi_prestasi,
					'foto_prestasi' 		=> 'not-found.jpg',
				);
				$this->db->insert('prestasi', $data);
			}
	}

	function edit()
	{
		$id 				= $this->input->post('id');
		$nama_prestasi 		= $this->input->post('nama_prestasi');
		$deskripsi_prestasi	= $this->input->post('deskripsi_prestasi');


		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/admin/images/prestasi/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
		if($_FILES['foto_prestasi']['name'])
        {
            if ($this->upload->do_upload('foto_prestasi'))
            {
				$gbr = $this->upload->data();
				$data = array(
					'nama_prestasi'			=> $nama_prestasi,
					'deskripsi_prestasi'	=> $deskripsi_prestasi,
					'foto_prestasi' 		=> $gbr['file_name'],
				);
				$this->db->where('id_prestasi',$id)->update('prestasi', $data);
			
			}	 
		}
		else{
				$data = array(
					'nama_prestasi'			=> $nama_prestasi,
					'deskripsi_prestasi'	=> $deskripsi_prestasi,
				);
				$this->db->where('id_prestasi',$id)->update('prestasi', $data);
			}
			
			return $gbr['file_name'];
	}
}