<head>
  <meta charset="utf-8">
  <title>Input Nilai</title>
</head>
<form method="POST" action="<?=base_url()?>index.php/CRUD/procInput">
<legend><b><big>Input Nilai</big></b></legend>
<table border=3>
  <tr>
    <td><b>NIM</b></td><td><input type="text" name="nim" required size="25" placeholder="Nim"></td>
  </tr>
  <tr>
    <td><b>Nama</b></td><td><input type="text" name="nama" required size="25" placeholder="Nama"></td>
  </tr>
  <tr>
    <td><b>Nilai</b></td><td><input type="text" name="nilai" required size="25" placeholder="Nilai"></td>
  </tr>
</table>
  <input type="submit" value="input" name="Input">
</form>
