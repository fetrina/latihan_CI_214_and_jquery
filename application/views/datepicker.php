<!-- Latihan Buku CI & Jquery | Halaman 64-65
     BAB 4.1 Date Picker | 
-->

<!--View Date Picker-->
<html lang="id">
  <head>
      <title>jQuery Datepicker</title>
      
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>datepicker/rfnet.css">
      <script type="text/javascript" src="<?php echo base_url();?>datepicker/datetimepicker_css.js"></script>
      <!--Di CI klo mau link js atau css, lwt src atau href, musti pake php echo base_url();nama_linknya -->
  </head>
  <body>
  
    <h3>4.1 Datepicker jquery</h3>
    
    <table>
      <tr>
        <td>Tanggal Lahir</td>
        <td><a href="javascript:NewCssCal('ttl','ddmmyyyy')">
            <input type="text" name="ttl" id="ttl" size="20">
            <img src="<?php echo base_url();?>datepicker/images/cal.gif" width="16" height="16" alt="Pick a date">
            </a>
        </td>
      </tr>
    </table>
  
  </body>
</html>