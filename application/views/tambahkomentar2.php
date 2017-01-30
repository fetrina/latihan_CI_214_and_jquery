<!-- Latihan Buku CI & Jquery | Halaman 24-25
     BAB 2.4.3 Operasi Create
-->

<!--View Form Input-->
<html lang="id">
  <head>
      <title>Latihan CI - MVC database</title>
  </head>
  <body>
  
    <h3>2.4 Tambah Data</h3>
    <?php
    	echo form_open('ckomentar2/tambahdata');
    ?>

    <table>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td> <?php echo form_input('nama'); ?> </td>
      </tr>
      <tr>
        <td>URL</td>
        <td>:</td>
        <td> <?php echo form_input('url'); ?> </td>
      </tr>
      <tr>
        <td>Pesan</td>
        <td>:</td>
        <td> <?php echo form_textarea('pesan'); ?> </td>
      </tr>
      <tr>
        <td> <?php echo form_submit('submit','Simpan','id="submit"'); ?> 
        </td>
      </tr>
    </table>

    <?php echo form_close(); ?>

  </body>
</html>