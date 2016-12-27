<?php
//Latihan Buku CI & Jquery | Halaman 25-26
// BAB 2.4.3 Operasi Create

class Ckomentar extends CI_Controller{ //coba http://localhost/latihan_CI_214_jquery/index.php/ckomentar/tambahdata
	//tambahdata jg disebutkan dalam link, krn dsini functionnya bukan index(), jadi harus disebutkan 

	function tambahdata(){
		if($this->input->post('submit')) { //jika id submit diklik, maka akan dilakukan sesi selanjutnya
			$this->load->model('mkomentar'); //meload file model mkomentar
			$this->mkomentar->tambah(); //memanggil fungsi tambah() dalam class mkomentar
			redirect('ckomentar/index'); //mengarahkan re-direct ke url posisi index
		}

		$this->load->view('tambahkomentar'); // meload file view bernama tambahkomentar
	}

}

?>
