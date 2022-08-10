<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profil extends CI_Model {

	function tampil($iduser)
  	{
	    $this->db->select('*');
	    $this->db->from('tb_login');
		$this->db->where('id_admin', $iduser);
	    $query = $this->db->get();
	    return $query->row_array();
	}

	function ambillevel($id)
	{
		$this->db->select('*');
		$this->db->from('tb_login');
		$this->db->where('id_admin',$id);
		$query = $this->db->get();
    	return $query->row_array();
	}

	function edit()
	{
		$id 	 			= $this->input->post('id');
		$nama_depan 	 	= $this->input->post('nama_depan');
		$nama_belakang		= $this->input->post('nama_belakang');
		$email				= $this->input->post('email');
		$no_telephone		= $this->input->post('no_telephone');

		$this->load->library('upload');
		$nmfile = "file_" . time();
		$config['upload_path']		= 'images/profil/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;

		$this->upload->initialize($config);
		
		if($_FILES['foto_profil']['name'])
        {
            if ($this->upload->do_upload('foto_profil'))
            {
				$gbr = $this->upload->data();
				$data = array(
					'nama_depan'		=> $nama_depan,
					'nama_belakang'		=> $nama_belakang,
					'email'				=> $email,
					'no_telephone'		=> $no_telephone,
					'foto_profil'		=> $gbr['file_name'],
				);
				$this->db->where('id_admin',$id)->update('tb_login', $data);
			
			}	 
		}
		else{
				$data = array(
					'nama_depan'		=> $nama_depan,
					'nama_belakang'		=> $nama_belakang,
					'email'				=> $email,
					'no_telephone'		=> $no_telephone,
				);
				$this->db->where('id_admin',$id)->update('tb_login', $data);
			}

			return $gbr['file_name'];
				
	}

	function ubahpassword()
  	{
    
	    $id 			= $this->input->post('id');
	    $password 		= $this->input->post('password');
	    $password1		= sha1($password);
	    $data = array(
	          'password'    => $password1,
	        );
	        $this->db->where('id_admin',$id)->update('tb_login', $data);
    
  	}
}