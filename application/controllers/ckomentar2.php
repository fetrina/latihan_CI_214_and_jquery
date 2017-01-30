<!-- Latihan Buku CI & jQuery | Halaman 25-39
 	 BAB 2.4.3 Operasi Insert, Read, Update  | Pengembangan dari ckomentar.php
 -->

<?php

class Ckomentar2 extends CI_Controller{ //coba jalankan http://localhost/latihan_CI_214_jquery/index.php/ckomentar

	//=== Memanggil view data tabelnya ===
	function index(){
		$this->load->model('mkomentar2'); //memanggil model mkomentar
		$data['hasil']= $this->mkomentar2->ambil(); //hasil dri fungsi ambil, dimsukin ke variabel $data['hasil']
												   //krn di file model datanya dikembalikan pd $hasil
		$this->load->view('vkomentar2', $data);
	}

	//=== Memanggil view form inputan ===
	function tambahdata(){ 
		if($this->input->post('submit')) { //jika id submit diklik, maka akan dilakukan...
			$this->load->model('mkomentar2'); //meload file model mkomentar2
			$this->mkomentar2->tambah(); //memanggil fungsi tambah() dalam class mkomentar2
			redirect('ckomentar2/index'); //memanggil controler ckomentar2 fucntion index / mengarahkan re-direct ke url posisi index
		}
		$this->load->view('tambahkomentar2'); // meload file view bernama tambahkomentar (form inputnya)
	}

	//=== Memanggil view ubahkomentar (form update) ===
	function updatedata($id){ 
		//===Intinya nampilin form yg berisi data slected yg mau kt update.===
		if($_POST == NULL){  		//jika $_POST blm dilakukan
			$this->load->model('mkomentar2');	 //u mlakukan load model mkomentar
			$data['hasil'] = $this->mkomentar2->select($id); //u memanggil fungsi select($id) dlm model mkomentar
			$this->load->view('ubahkomentar2', $data);	//u memanggil view ubahkomentar, dmn didalamnya tlah mngndung $data u mnmpilan data sesuai id yg terpilih. 
		}
		//Scrit dbwh ini u melakukan update data yg ada didatabase. 
		else { //dilakukan sesi selanjutnya yaitu....
			$this->load->model('mkomentar2');
			$this->mkomentar2->update($id); //update data berdasar id
			redirect('ckomentar2/index');
		}
	}

	//=== Delete data ===
	function hapusdata($id){
		$this->db->delete('komentar',array('id' => $id)); //u menghapus data pd tabel komentar sesuai id yg terpilih
		redirect('ckomentar2/index');
	}

}

?>


<!-- Note: bila controller ini dicoba dibrowser, berhasil menginput data ke database, berarti sukses. G masalah klo ada error 
dgn pesan The page you requested was not found. Ini karena line redirect() diatas mngarah ke index namun, kita belum bikin function redirect ke index nya. -->