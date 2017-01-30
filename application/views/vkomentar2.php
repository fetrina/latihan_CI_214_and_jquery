<!-- Latihan Buku CI & Jquery | Halaman 24-41
     BAB 2.4.3 Operasi Read & Update & Delete | 
-->

<!--View Tabel Data-->
<html lang="id">
  <head>
      <title>View Latihan CI - MVC database</title>
  </head>
  <body>
  
    <h3>2.4.4 Operasi Read</h3>
    
    <?php
    	echo anchor('ckomentar2/tambahdata','Tambah data');
    ?>

    <?php
    if (empty($hasil)) {
      echo "tidak ada data";
    }
    else{

    ?>
      <h3>Daftar Komentar</h3>
      <table border=1>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>URL</th>
        <th>Pesan</th>
        <th>Aksi</th>
      </tr>
      
      <?php
        $no = 1;
        foreach ($hasil as $data): // mlakukan looping dri hasil nilai array brnama $hasil,
        //dan drubah k dlm bntuk satuan variabel $data
      ?>
      <tr>
        <td><?php echo $no; ?> </td>
        <td><?php echo $data->nama; ?> </td> <!-- mnmpilkn data brdsr kolom field nama -->
        <td><?php echo $data->url; ?> </td>
        <td><?php echo $data->pesan; ?> </td>
        <td><a href="updatedata/<?php echo $data->id; ?> "> Ubah </a> <!-- dibuku, linknya g pake nama controller-->
          | <a href="hapusdata/<?php echo $data->id; ?> "> Hapus </a> 
        </td>
      </tr>
      
      <?php 
        $no++;
        endforeach;
      ?>
     </table>

    <?php   
    }
    ?>

  </body>
</html>