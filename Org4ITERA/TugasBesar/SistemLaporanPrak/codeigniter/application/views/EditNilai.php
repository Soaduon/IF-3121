<head>
  <meta charset="utf-8">
  <title>Edit Nilai</title>
</head>
<form method="POST" action="<?=base_url()?>index.php/CRUD/procEdit">
<legend><b><big>Edit Nilai</big></b></legend>
    <?php
      foreach ($data as $key => $value) {
        # code...
        echo "<input type='text' name='nim' required size='25' placeholder='Nim' value='".$value['nim']."' readonly>";
        echo "<input type='text' name='nama' required size='25' placeholder='Nama' value='".$value['nama']."' readonly>";
        echo "<input type='text' name='nilai' required size='25' placeholder='Nilai' value='".$value['nilai']."'>";
        echo "<input type='submit' value='Update' name='Update'><br>";
      }
     ?>
</form>
