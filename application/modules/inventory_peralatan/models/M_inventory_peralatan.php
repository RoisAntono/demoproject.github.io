<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_inventory_peralatan extends CI_Model {

	function tampil()
	{

		$this->db->select('*');
		$this->db->from('inv_peralatan');
		$this->db->join('merk', 'inv_peralatan.merk = merk.id_merk');
		$this->db->join('inventory_room', 'inv_peralatan.ruang = inventory_room.id_inv_room');
		$query = $this->db->get();




		return $query->result();
	}


		function tampiledit($id)
	{
		$idnya=decrypt_url($id);

		$this->db->select('*');
		$this->db->from('inv_peralatan');
		$this->db->join('merk', 'inv_peralatan.merk = merk.id_merk');
		$this->db->join('inventory_room', 'inv_peralatan.ruang = inventory_room.id_inv_room');
		$this->db->where('id_inv_peralatan',$idnya);
		$query = $this->db->get();


		
    	return $query->row_array();
	}




	function getmerk()
	{
		return $this->db->get('merk')->result();
	}

	function getruang()
	{
		return $this->db->get('inventory_room')->result();
	}

	function tambah()
	{


		$kode 		= $this->input->post('kode');
		$kategori 		= $this->input->post('kategori');
		$merk 		= $this->input->post('merk');
		$tipe 		= $this->input->post('tipe');
		$ukuran 		= $this->input->post('ukuran');
		$bahan 		= $this->input->post('bahan');
		$nopabrik 		= $this->input->post('nopabrik');
		$norangka 		= $this->input->post('norangka');
		$nomesin 		= $this->input->post('nomesin');
		$nopolisi 		= $this->input->post('nopolisi');
		$nobpkb 		= $this->input->post('nobpkb');
		$kondisi 		= $this->input->post('kondisi');
		$ruang 		= $this->input->post('ruang');
		$tgl_oleh 		= $this->input->post('tgl_oleh');
		$tgl_buku 		= $this->input->post('tgl_buku');
		$asal 		= $this->input->post('asal');
		$keterangan 		= $this->input->post('keterangan');
		$nilai 		= $this->input->post('nilai');
		$nilaitambah 		= $this->input->post('nilaitambah');
		$beban 		= $this->input->post('beban');
		$akumulasi 		= $this->input->post('akumulasi');
		$nilaibuku 		= $this->input->post('nilaibuku');
		$sisausia 		= $this->input->post('sisausia');

		$insert_oleh = date( 'Y-m-d', strtotime($tgl_oleh));
		$insert_buku = date( 'Y-m-d', strtotime($tgl_buku));



		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/dokumen/peralatan/';
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
					'kode_barang'		=> $kode,
					'kategori'		=> $kategori,
					'merk'		=> $merk,
					'tipe'		=> $tipe,
					'ukuran'		=> $ukuran,
					'bahan'		=> $bahan,
					'nopabrik'		=> $nopabrik,
					'norangka'		=> $norangka,
					'nomesin'		=> $nomesin,
					'nopolisi'		=> $nopolisi,
					'nobpkb'		=> $nobpkb,
					'kondisi'		=> $kondisi,
					'ruang'		=> $ruang,
					'tgl_oleh'		=> $insert_oleh,
					'tgl_buku'		=> $insert_buku,
					'asal'		=> $asal,
					'keterangan'		=> $keterangan,
					'nilai'		=> $nilai,
					'nilaitambah'		=> $nilaitambah,
					'beban'		=> $beban,
					'akumulasi'		=> $akumulasi,
					'nilaibuku'		=> $nilaibuku,
					'sisausia'		=> $sisausia,
					'dokumen' 				=> $gbr['file_name'],
					
					
				);
				$this->db->insert('inv_peralatan', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
			}	 
		}
		else{
				$data = array(
					'kode_barang'		=> $kode,
					'kategori'		=> $kategori,
					'merk'		=> $merk,
					'tipe'		=> $tipe,
					'ukuran'		=> $ukuran,
					'bahan'		=> $bahan,
					'nopabrik'		=> $nopabrik,
					'norangka'		=> $norangka,
					'nomesin'		=> $nomesin,
					'nopolisi'		=> $nopolisi,
					'nobpkb'		=> $nobpkb,
					'kondisi'		=> $kondisi,
					'ruang'		=> $ruang,
					'tgl_oleh'		=> $insert_oleh,
					'tgl_buku'		=> $insert_buku,
					'asal'		=> $asal,
					'keterangan'		=> $keterangan,
					'nilai'		=> $nilai,
					'nilaitambah'		=> $nilaitambah,
					'beban'		=> $beban,
					'akumulasi'		=> $akumulasi,
					'nilaibuku'		=> $nilaibuku,
					'sisausia'		=> $sisausia,
					'dokumen' 				=> 'kosong1.png',
				);
				$this->db->insert('inv_peralatan', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			}
	}

	function edit()
	{
		$id = $this->input->post('id');

		$kode 		= $this->input->post('kode');
		$kategori 		= $this->input->post('kategori');
		$merk 		= $this->input->post('merk');
		$tipe 		= $this->input->post('tipe');
		$ukuran 		= $this->input->post('ukuran');
		$bahan 		= $this->input->post('bahan');
		$nopabrik 		= $this->input->post('nopabrik');
		$norangka 		= $this->input->post('norangka');
		$nomesin 		= $this->input->post('nomesin');
		$nopolisi 		= $this->input->post('nopolisi');
		$nobpkb 		= $this->input->post('nobpkb');
		$kondisi 		= $this->input->post('kondisi');
		$ruang 		= $this->input->post('ruang');
		$tgl_oleh 		= $this->input->post('tgl_oleh');
		$tgl_buku 		= $this->input->post('tgl_buku');
		$asal 		= $this->input->post('asal');
		$keterangan 		= $this->input->post('keterangan');
		$nilai 		= $this->input->post('nilai');
		$nilaitambah 		= $this->input->post('nilaitambah');
		$beban 		= $this->input->post('beban');
		$akumulasi 		= $this->input->post('akumulasi');
		$nilaibuku 		= $this->input->post('nilaibuku');
		$sisausia 		= $this->input->post('sisausia');

		$insert_oleh = date( 'Y-m-d', strtotime($tgl_oleh));
		$insert_buku = date( 'Y-m-d', strtotime($tgl_buku));



		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/img/';
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
					'merk'		=> $merk,
					'tipe'		=> $tipe,
					'ukuran'		=> $ukuran,
					'bahan'		=> $bahan,
					'nopabrik'		=> $nopabrik,
					'norangka'		=> $norangka,
					'nomesin'		=> $nomesin,
					'nopolisi'		=> $nopolisi,
					'nobpkb'		=> $nobpkb,
					'kondisi'		=> $kondisi,
					'ruang'		=> $ruang,
					'tgl_oleh'		=> $insert_oleh,
					'tgl_buku'		=> $insert_buku,
					'asal'		=> $asal,
					'keterangan'		=> $keterangan,
					'nilai'		=> $nilai,
					'nilaitambah'		=> $nilaitambah,
					'beban'		=> $beban,
					'akumulasi'		=> $akumulasi,
					'nilaibuku'		=> $nilaibuku,
					'sisausia'		=> $sisausia,
					'dokumen' 				=> $gbr['file_name'],
				);
				$this->db->where('id_inv_peralatan',$id)->update('inv_peralatan', $data);
				$this->session->set_flashdata('msg', 'suksesedit');
			
			}	 
		}
		else{
				$data = array(
					'merk'		=> $merk,
					'tipe'		=> $tipe,
					'ukuran'		=> $ukuran,
					'bahan'		=> $bahan,
					'nopabrik'		=> $nopabrik,
					'norangka'		=> $norangka,
					'nomesin'		=> $nomesin,
					'nopolisi'		=> $nopolisi,
					'nobpkb'		=> $nobpkb,
					'kondisi'		=> $kondisi,
					'ruang'		=> $ruang,
					'tgl_oleh'		=> $insert_oleh,
					'tgl_buku'		=> $insert_buku,
					'asal'		=> $asal,
					'keterangan'		=> $keterangan,
					'nilai'		=> $nilai,
					'nilaitambah'		=> $nilaitambah,
					'beban'		=> $beban,
					'akumulasi'		=> $akumulasi,
					'nilaibuku'		=> $nilaibuku,
					'sisausia'		=> $sisausia,
				);
				$this->db->where('id_inv_peralatan',$id)->update('inv_peralatan', $data);
				$this->session->set_flashdata('msg', 'suksesedit');
			}
	}

	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_inv_peralatan', $id)->delete('inv_peralatan');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}




	function fetch_data($query)
	 {
	  $this->db->select("*");
	  $this->db->from("kategori_inventory");
	  if($query != '')
	  {
	   $this->db->like('kode_kat_inventory', $query);
	   $this->db->or_like('nama_kat_inventory', $query);
	  }
	  $this->db->order_by('nama_kat_inventory', 'DESC');
	  return $this->db->get();
	 }


	function totalaset()
	{
		return $this->db->get('inv_peralatan')->num_rows();
	}
	
	function totalasetrusak()
	{
		$this->db->select('*');
		$this->db->from('inv_peralatan');
		$this->db->where('kondisi','Rusak');
		$query = $this->db->get();
		
    	return $query->num_rows();
	}

	function totalasetkurangbaik()
	{
		$this->db->select('*');
		$this->db->from('inv_peralatan');
		$this->db->where('kondisi','Kurang Baik');
		$query = $this->db->get();
		
    	return $query->num_rows();
	}

	function totalnilaiaset()
	{
		$this->db->select_sum('nilai');
		$result = $this->db->get('inv_peralatan')->row();  
		return $result->nilai;
	}

	function totalnilaiasetrusak()
	{
		$this->db->select_sum('nilai');
		$this->db->where('kondisi','Rusak');
		$result = $this->db->get('inv_peralatan')->row();  

		if($result->nilai==""){
			return 0;
		}else{
			return $result->nilai;
		}

		
	}


}