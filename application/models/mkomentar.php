<!-- Latihan Buku CI & jQuery | Halaman 24-25
 	 BAB 2.4.3 Operasi Create
 -->

<?php

class Mkomentar extends CI_Model{
	
	function tambah(){
		$nama = $this->input->post('nama'); //u menyimpan data post ke dalam variabel
		$url = $this->input->post('url');  
		$pesan = $this->input->post('pesan');
		$data = array(  //u memasukkan variabel tsbt ke dalam nilai array
			'nama' => $nama,
			'url' => $url,
			'pesan' => $pesan
			);
		$this->db->insert('komentar',$data); //u melakukan input nilai array($data) tsb ke dalam tabel komentar di database
	}

}

?>

