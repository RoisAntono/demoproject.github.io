<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_berita extends CI_Model {

	function tampil()
	{
		return $this->db->get('berita')->result();
	}

	function tampildetail($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_berita',$idnya);
    	return $this->db->get('berita')->row_array();
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_berita',$idnya);
    	return $this->db->get('berita')->row_array();
	}

	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_berita', $id)->delete('berita');
	}

	function tambah()
	{
		$judul_berita 		= $this->input->post('judul_berita');
		$deskripsi_berita	= $this->input->post('deskripsi_berita');


		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/admin/images/berita/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
		if($_FILES['foto_berita']['name'])
        {
            if ($this->upload->do_upload('foto_berita'))
            {
				$gbr = $this->upload->data();
				$data = array(
					'judul_berita'		=> $judul_berita,
					'deskripsi_berita'	=> $deskripsi_berita,
					'foto_berita' 		=> $gbr['file_name'],
					
					
				);
				$this->db->insert('berita', $data);
			
			}	 
		}
		else{
				$data = array(
					'judul_berita'		=> $judul_berita,
					'deskripsi_berita'	=> $deskripsi_berita,
					'foto_berita' 		=> 'not-found.jpg',
				);
				$this->db->insert('berita', $data);
			}
	}

	function edit()
	{
		$id 				= $this->input->post('id');
		$judul_berita 		= $this->input->post('judul_berita');
		$deskripsi_berita	= $this->input->post('deskripsi_berita');


		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/admin/images/berita/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
		if($_FILES['foto_berita']['name'])
        {
            if ($this->upload->do_upload('foto_berita'))
            {
				$gbr = $this->upload->data();
				$data = array(
					'judul_berita'		=> $judul_berita,
					'deskripsi_berita'	=> $deskripsi_berita,
					'foto_berita' 		=> $gbr['file_name'],
				);
				$this->db->where('id_berita',$id)->update('berita', $data);
			
			}	 
		}
		else{
				$data = array(
					'judul_berita'		=> $judul_berita,
					'deskripsi_berita'	=> $deskripsi_berita,
				);
				$this->db->where('id_berita',$id)->update('berita', $data);
			}
			
			return $gbr['file_name'];
	}


	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_sekolah',$cari)->get('sekolah')->result();
	}
}