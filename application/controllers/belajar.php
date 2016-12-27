<?php 
//Latihan Buku CI & Jquery | BAB 2.2 | Halaman 12-15

class Belajar extends CI_Controller { // yang membedakan di CI versi 2, Controller jadi CI_Controller. 
	//Nama Class harus huruf besar dan sama dengan nama filenya

	function index() { 	//function index adalah yg pertama dijalankan. 
		echo "Bab 2.1.1 File controller pertama anda"; //coba http://localhost/latihan_CI_214_jquery/index.php/belajar
	}
	function belajarphp() {
		echo "Bab 2.1.2 Memanggil fungsi belajarphp"; //coba http://localhost/latihan_CI_214_jquery/index.php/belajar/belajarphp
	}
	function belajarci() {
		echo "Bab 2.1.3 Memanggil fungsi belajarci"; //coba http://localhost/latihan_CI_214_jquery/index.php/belajar/belajarci
	}
}

?>