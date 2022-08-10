<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_fasilitas extends CI_Model {

	function tampil()
	{
		return $this->db->get('fasilitas')->result();
	}

	function tampiledit()
	{
		$this->db->select('*');
		$this->db->from('fasilitas');
		// $this->db->where('id_fasilitas');
		$query = $this->db->get();
		return $query->row_array();
	}

	function idfasilitas($id)
	{
		$this->db->select('*');
		$this->db->from('fasilitas');
		$this->db->where('id_fasilitas', $id);
		$query = $this->db->get();
		return $query->row_array();
	}

	function tambah()
	{
		$nama_fasilitas 	= $this->input->post('nama_fasilitas');


		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/admin/images/fasilitas/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
		if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
				$gbr = $this->upload->data();
				$data = array(
					'nama_fasilitas'	=> $nama_fasilitas,
					'foto_fasilitas' 	=> $gbr['file_name'],
					
					
				);
				$this->db->insert('fasilitas', $data);
			
			}	 
		}
		else{
				$data = array(
					'nama_fasilitas'	=> $nama_fasilitas,
					'foto_fasilitas' 	=> 'not-found.jpg',
				);
				$this->db->insert('fasilitas', $data);
			}
	}

	function edit()
	{
		$id 				= $this->input->post('id');
		$nama_fasilitas 	= $this->input->post('nama_fasilitas');


		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/admin/images/fasilitas/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
		if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
				$gbr = $this->upload->data();
				$data = array(
					'nama_fasilitas'	=> $nama_fasilitas,
					'foto_fasilitas' 	=> $gbr['file_name'],
				);
				$this->db->where('id_sekolah',$id)->update('fasilitas', $data);
			
			}	 
		}
		else{
				$data = array(
					'nama_fasilitas'	=> $nama_fasilitas,
				);
				$this->db->where('id_sekolah',$id)->update('fasilitas', $data);
			}
			
			return $gbr['file_name'];
	}

	function hapus($id)
	{
		$this->db->where('id_fasilitas', $id)->delete('fasilitas');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_sekolah',$cari)->get('sekolah')->result();
	}
}