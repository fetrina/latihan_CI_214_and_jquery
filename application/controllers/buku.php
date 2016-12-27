<?php 
//Latihan Buku CI & Jquery | BAB 2.2 | Halaman 16-19

class Buku extends CI_Controller {

	function index() { 	//http://localhost/latihan_CI_214_jquery/index.php/buku  ,maka function index yg pertama dijalankan. 
		$this->load->view('buku1'); //fungsi ini menjalankan load view buku1.php
	}

	function semua() { //coba http://localhost/latihan_CI_214_jquery/index.php/buku/semua , jk fgsi ini dpgl mk akan load 2 view dibawah
		$this->load->view('buku1'); //load view buku1.php
		$this->load->view('penulis1'); //load view penulis1.php
	}

}

?>