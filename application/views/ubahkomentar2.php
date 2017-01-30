<!-- Latihan Buku CI & Jquery | Halaman 34-35
     BAB 2.4.4 Operasi Update
-->

<!--View Form Input-->
<html lang="id">
  <head>
      <title>Latihan CI - MVC database</title>
  </head>
  <body>
  
    <h3>2.4 Update Data</h3>
    <?php
      echo form_open('ckomentar2/updatedata/'.$hasil->id);
    ?>

    <table>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td> <?php echo form_input('nama', $hasil->nama); ?> </td>
      </tr>
      <tr>
        <td>URL</td>
        <td>:</td>
        <td> <?php echo form_input('url', $hasil->url); ?> </td>
      </tr>
      <tr>
        <td>Pesan</td>
        <td>:</td>
        <td> <?php echo form_textarea('pesan', $hasil->pesan); ?> </td>
      </tr>
      <tr>
        <td> <?php echo form_submit('submit','Ubah','id="submit"'); ?> 
        </td>
      </tr>
    </table>

    <?php echo form_close(); ?>

  </body>
</html>