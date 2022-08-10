<?php if (!defined("BASEPATH")) exit("No direct script access allowed");

// Popup

function tampilnotif(){

	$CI = get_instance();

	if( $CI->session->flashdata('msg')=="sukseshapus"){

		echo ' <div class="alert alert-danger fade show" role="alert">Data yang anda pilih telah dihapus.</div>';
	}

	if( $CI->session->flashdata('msg')=="suksestambah"){

		echo ' <div class="alert alert-success fade show" role="alert">Data anda telah berhasil ditembahkan.</div>';
	}

	if( $CI->session->flashdata('msg')=="suksesedit"){

		echo ' <div class="alert alert-success fade show" role="alert">Data anda telah berhasil di ubah.</div>';
	}



}
