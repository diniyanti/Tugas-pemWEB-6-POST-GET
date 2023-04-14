<html>
 <head>
  <title>Biodata</title>
 </head>
 <body>
  <table width="450" border="0" cellpadding="0" cellspacing="10" align="center">
  <form action="output.php" method="post">
    <h2 align="center">Masukkan Biodata Anda</h2>
  <tr>
    <td>Nama Lengkap</td>
    <td>:</td>
    <td><input type=text name=Nama></td>
  </tr>
  <tr>
    <td>Tempat dan Tanggal Lahir</td>
    <td>:</td>
    <td>
      <input type=text name=Tempat ><br>
      <input type=date name=date ><br>
   </td>
  </tr>
  <tr>
     <td>Jenis Kelamin</td>
     <td>:</td>
     <td>
        <input type=radio name=JK value=Laki-laki>Laki-laki
        <input type=radio name=JK value=Perempuan>Perempuan
      </td>
  </tr>
  <tr>
     <td>Alamat</td>
     <td>:</td>
     <td><input type=textfield name=alamat></td>
  </tr>
  <tr>
     <td> </td>
     <td> </td>
     <td><input type="submit" name=simpan value=Simpan></td>
  </tr>
  </form>
  </table>
 </body>
</html>