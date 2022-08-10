<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ekstrakulikuler extends CI_Model {

	function tampil()
	{
		$this->db->from('ekskul');
		$query = $this->db->get();

		return $query->result();
	}

	function tambah()
	{
		$nama 			= $this->input->post('nama_ekskul');
		$keterangan		= $this->input->post('keterangan_ekskul');
		$id 			= $this->input->post('id');


		$this->load->library('upload');
		$nmfile = "file_" . time();
		$config['upload_path']		= 'assets/admin/images/ekskul/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;

		$this->upload->initialize($config);

		if ($_FILES['gambar']['name']) {
			if ($this->upload->do_upload('gambar')) {
				$gbr = $this->upload->data();
				$data = array(
					'nama_ekskul'				=> $nama,
					'keterangan_ekskul'			=> $keterangan,
					'gambar' 					=> $gbr['file_name'],
				);
				$this->db->insert('ekskul', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			}
		} else {
			$data = array(
				'nama_ekskul'				=> $nama,
				'keterangan_ekskul'			=> $keterangan,
				'gambar'					=> 'kosong.jpg',
			);
			$this->db->insert('ekskul', $data);
			$this->session->set_flashdata('msg', 'suksestambah');
		}
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);

		$this->db->from('ekskul');
		$this->db->where('id_ekskul',$idnya);
		$query = $this->db->get();

    	return $query->row_array();
	}

	function edit()
	{
		$id 			= $this->input->post('id');

		$nama 			= $this->input->post('nama_ekskul');
		$keterangan		= $this->input->post('keterangan_ekskul');


		$this->load->library('upload');
		$nmfile = "file_" . time();
		$config['upload_path']		= 'assets/admin/images/ekskul/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;

		$this->upload->initialize($config);

		if ($_FILES['gambar']['name']) {
			if ($this->upload->do_upload('gambar')) {
				$gbr = $this->upload->data();
				$data = array(
					'nama_ekskul'				=> $nama,
					'keterangan_ekskul'			=> $keterangan,
					'gambar' 					=> $gbr['file_name'],
				);
				$this->db->where('id_ekskul', $id)->update('ekskul', $data);
				$this->session->set_flashdata('msg', 'suksesedit');
			}
		} else {
			$data = array(
				'nama_ekskul'				=> $nama,
				'keterangan_ekskul'			=> $keterangan,
			);
			$this->db->where('id_ekskul', $id)->update('ekskul', $data);
			$this->session->set_flashdata('msg', 'suksesedit');
		}
	}

	function tampildetail($id)
	{
		$idnya=decrypt_url($id);

		$this->db->from('ekskul');
		$this->db->where('id_ekskul',$idnya);
		$query = $this->db->get();

    	return $query->row_array();
	}

	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_ekskul', $id)->delete('ekskul');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

}