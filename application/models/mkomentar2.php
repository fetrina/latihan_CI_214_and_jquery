<!-- Latihan Buku CI & jQuery | Halaman 24-39
 	 BAB 2.4.3 Operasi Insert, Read, Update  | Pengembangan dari mkomentar.php
 -->

<?php

class Mkomentar2 extends CI_Model{
	
	//=== function untuk read data ===
	function ambil(){
		$ambil = $this->db->get('komentar');  //mengambil seluruh data pada db tabel komentar
		if ($ambil->num_rows() > 0) { //menghitung seluruh jumlah data yg ada, jika > 0 lakukan...
			foreach ($ambil->result() as $data) { //akan dibuat perulangan ke dlm variabel baru bernama $data
				$hasil[] = $data; // mengubah setiap data pada variabel $data menjadi kumpulan array ke dalam variabel $hasil 
			}
			return $hasil;
		}
	}

	//=== function untuk insert data ===
	function tambah(){
		$nama = $this->input->post('nama'); //u menyimpan data post ke dalam variabel
		$url = $this->input->post('url');  
		$pesan = $this->input->post('pesan');
		$data = array(  //u memasukkan variabel tsbt ke dalam nilai array
			'nama' => $nama, //'nama ini nilai array, sm aja kayak --> data['nama']' . Sedangkan $nama ini variabel
			'url' => $url,
			'pesan' => $pesan
			);
		$this->db->insert('komentar',$data); //u melakukan input nilai array($data) tsb ke dalam tabel komentar di database
	}

	//=== function untuk update data ===
	function update($id){
		$nama = $this->input->post('nama');
		$url = $this->input->post('url');
		$pesan = $this->input->post('pesan');
		$data = array(
			'nama' => $nama, //yg dlm tanda kutip ini kykny nama field databasenya
			'url'=> $url,
			'pesan' => $pesan
		);
		$this->db->where('id',$id);  //u menentukan data yg akan diubah, data yg diubah adl data yg id nya sm dgn var $id yg dtgkp
		$this->db->update('komentar',$data); //u mengubah data dlm tabel komentar, dari variabel $data yg didapat dari form 
	}

	function select($id){ // u mneciptakan function select
		return $this->db->get_where('komentar', array('id' => $id))->row(); 
		//u mnyeleksi/menampilkan data komentar berdasarkan id yg terpilih
	}

	//=== function untuk delete data ===
	function hapus($id){
		$this->db->delete('komentar',array('id' => $id)); //menghapus data dari tabel komentar berdasarkan id yg ditentukan.
	}
}

?>

