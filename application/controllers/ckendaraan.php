<?php 
//Latihan Buku CI & Jquery | Halaman 20-21
// BAB 2.3 Memahami Konsep MVC

class Ckendaraan extends CI_Controller {

	function index() { //coba http://localhost/latihan_CI_214_jquery/index.php/ckendaraan
		$this->load->model('mkendaraan','',TRUE); //memanggiil class model mkendaraan
		$data['kalimat'] = $this->mkendaraan->mobil(); //memanggil function mobil dalam class mkendaraan 
		$this->load->view('vkendaraan', $data); //u memanggil file view bernama vkendaraan.php, dmna didalamnya mngdg $data['kalimat'];
	}

}

?>