<!-- Latihan Buku CI & jQuery | Halaman 25-26
 	 BAB 2.4.3 Operasi Create
 -->

<?php

class Ckomentar extends CI_Controller{ //coba jalankan http://localhost/latihan_CI_214_jquery/index.php/ckomentar/tambahdata
	//tambahdata jg disebutkan dalam link, krn dsini functionnya tdk ada index(), jadi harus disebutkan nama functionnya

	function tambahdata(){ 
		if($this->input->post('submit')) { //jika id submit diklik, maka akan dilakukan sesi selanjutnya
			$this->load->model('mkomentar'); //meload file model mkomentar
			$this->mkomentar->tambah(); //memanggil fungsi tambah() dalam class mkomentar
			redirect('ckomentar/index'); //memanggil controler ckomentar fucntion index / mengarahkan re-direct ke url posisi index
		}

	$this->load->view('tambahkomentar'); // meload file view bernama tambahkomentar
	}

}

?>


<!-- Note: bila controller ini dicoba dibrowser, berhasil menginput data ke database, berarti sukses. G masalah klo ada error 
dgn pesan The page you requested was not found. Ini karena line redirect() diatas mngarah ke index namun, kita belum bikin function redirect ke index nya. -->